document.addEventListener("DOMContentLoaded", function () {
    // Inject custom validation styles with clean, non-distorting error aesthetics
    if (!document.getElementById("validation-custom-styles")) {
        const style = document.createElement("style");
        style.id = "validation-custom-styles";
        style.innerHTML = `
            .input-error-highlight {
                border-color: #dc3545 !important;
                box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.2) !important;
                transition: border-color 0.2s ease, box-shadow 0.2s ease !important;
            }
            .field-error-msg {
                color: #dc3545 !important;
                background-color: rgba(220, 53, 69, 0.08) !important;
                border: 1px solid rgba(220, 53, 69, 0.25) !important;
                font-size: 0.8125rem !important;
                font-weight: 600 !important;
                margin-top: 10px !important;
                margin-bottom: 5px !important;
                text-align: left !important;
                padding: 8px 12px !important;
                border-radius: 8px !important;
                display: flex !important;
                align-items: center !important;
                gap: 8px !important;
                animation: fieldErrorFadeIn 0.3s ease-out !important;
            }
            .field-error-msg i {
                font-size: 1rem !important;
                color: #dc3545 !important;
                flex-shrink: 0 !important;
            }
            @keyframes fieldErrorFadeIn {
                from { opacity: 0; transform: translateY(-4px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    }

    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Clear previous errors and highlights
            form.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
            form.querySelectorAll(".field-error-msg").forEach(el => el.remove());

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            
            // Get fields
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');

            let hasErrors = false;
            let firstInvalidInput = null;

            // Helper to show field error cleanly without distorting form grid
            function showError(inputEl, message) {
                if (!inputEl) return;
                inputEl.classList.add("input-error-highlight");
                
                if (!firstInvalidInput) {
                    firstInvalidInput = inputEl;
                }

                // Remove highlight as soon as user types
                inputEl.addEventListener("input", function onInput() {
                    inputEl.classList.remove("input-error-highlight");
                    const existingMsg = form.querySelector(".field-error-msg");
                    if (existingMsg) existingMsg.remove();
                    inputEl.removeEventListener("input", onInput);
                });

                const errorDiv = document.createElement("div");
                errorDiv.className = "field-error-msg";
                errorDiv.innerHTML = `<i class="bi bi-exclamation-circle-fill"></i> <span>${message}</span>`;
                
                // If a resultBox exists, show message there cleanly to preserve grid alignment
                if (resultBox) {
                    resultBox.innerHTML = "";
                    resultBox.appendChild(errorDiv);
                } else {
                    const wrapper = inputEl.closest(".form-group") || inputEl.parentElement;
                    wrapper.appendChild(errorDiv);
                }
            }

            // Validate Name
            if (nameInput) {
                const val = nameInput.value.trim();
                if (!val) {
                    showError(nameInput, "The Name field is required.");
                    hasErrors = true;
                }
            }

            // Validate Phone
            if (phoneInput && !hasErrors) {
                const val = phoneInput.value.trim();
                if (!val) {
                    showError(phoneInput, "The Mobile field is required.");
                    hasErrors = true;
                } else if (!/^\d+$/.test(val)) {
                    showError(phoneInput, "The Mobile field must contain only numbers.");
                    hasErrors = true;
                } else if (val.length !== 10) {
                    showError(phoneInput, "The Mobile field must be exactly 10 digits.");
                    hasErrors = true;
                }
            }

            if (hasErrors) {
                if (firstInvalidInput) {
                    firstInvalidInput.focus();
                }
                return; // Stop form submission
            }

            const formData = new FormData(this);

            // Show loader
            if (resultBox) {
                resultBox.innerHTML = "<p style='color:orange; font-weight:bold; font-size:0.9rem; padding: 10px;'>Please wait...</p>";
            }

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                if (data.trim() === "1") {
                    data = `
                        <div class='alert alert-success' style='margin-top: 15px;'>
                        <p style='color:green; font-weight:bold; margin-bottom: 0;'>Thank you! Your request has been submitted successfully.</p>
                        </div>
                    `;
                    form.reset();
                }

                if (resultBox) {
                    resultBox.innerHTML = data;
                    setTimeout(() => resultBox.innerHTML = "", 8000);
                }
            })
            .catch(err => {
                if (resultBox) {
                    resultBox.innerHTML = "<p style='color:red; font-weight:bold;'>Something went wrong!</p>";
                }
            });

        });

    });

});
