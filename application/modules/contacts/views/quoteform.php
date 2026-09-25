  <div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
    <!-- Card Header with Catchy New Heading & Discount Badge -->
    <div class="hero-quote-header">
      <div class="quote-header-content d-flex align-items-center justify-content-between w-100">
        <div class="d-flex align-items-center gap-2">
          <div class="quote-header-badge-icon">
            <i class="bi bi-lightning-charge-fill"></i>
          </div>
          <div>
            <h3 class="hero-quote-title" itemprop="name">Instant Moving Estimate</h3>
            <p class="hero-quote-subtitle" itemprop="description">Fast &bull; Transparent &bull; 100% Free</p>
          </div>
        </div>
        <span class="quote-save-badge">
          <i class="bi bi-tag-fill me-1"></i> Save 20%
        </span>
      </div>
    </div>
    
    <div class="hero-quote-white-card">
      <!-- Card Body / Form -->
      <div class="card-body-form">
        <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
          
          <div class="form-row-custom">
            <!-- Name Input with Floating Label -->
            <div class="form-floating input-wrap-custom">
              <input type="text" name="name" class="form-control form-control-custom" id="quote_name" placeholder="Your Name" required>
              <label for="quote_name">
                <i class="bi bi-person-fill float-icon"></i> Your Name
              </label>
            </div>
            
            <!-- Phone Input with Floating Label -->
            <div class="form-floating input-wrap-custom">
              <input type="tel" name="phone" class="form-control form-control-custom" id="quote_phone" placeholder="Phone Number" required>
              <label for="quote_phone">
                <i class="bi bi-telephone-fill float-icon"></i> Phone Number
              </label>
            </div>
            
            <!-- Select Service with Floating Label -->
            <div class="form-floating input-wrap-custom">
              <select name="mtype" class="form-select form-select-custom" id="quote_service" aria-label="Select Service" required>
                <option value="" disabled selected hidden></option>
                <option value="Household Relocation">Household Relocation</option>
                <option value="Office Relocation">Office Relocation</option>
                <option value="Car Transportation">Car Transportation</option>
                <option value="Bike Transportation">Bike Transportation</option>
                <option value="Packing and Moving">Packing &amp; Moving</option>
                <option value="Loading and Unloading">Loading &amp; Unloading</option>
                <option value="Warehousing & Storage">Warehousing &amp; Storage</option>
                <option value="Local City Shifting">Local City Moving</option>
                <option value="Commercial Goods Transport">Commercial Goods Moving</option>
              </select>
              <label for="quote_service">
                <i class="bi bi-box-seam-fill float-icon"></i> Select Service
              </label>
            </div>

            <!-- Moving Date with Floating Label -->
            <div class="form-floating input-wrap-custom">
              <input type="date" name="mdate" class="form-control form-control-custom" id="quote_date" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" required>
              <label for="quote_date">
                <i class="bi bi-calendar-event-fill float-icon"></i> Moving Date
              </label>
            </div>
            
            <!-- Moving From with Floating Label -->
            <div class="form-floating input-wrap-custom">
              <input type="text" name="mfrom" class="form-control form-control-custom" id="quote_from" value="<?= @$city ?>" placeholder="Moving From" required>
              <label for="quote_from">
                <i class="bi bi-geo-alt-fill float-icon"></i> Moving From
              </label>
            </div>
            
            <!-- Moving To with Floating Label -->
            <div class="form-floating input-wrap-custom">
              <input type="text" name="mto" class="form-control form-control-custom" id="quote_to" placeholder="Moving To" required>
              <label for="quote_to">
                <i class="bi bi-geo-alt-fill float-icon"></i> Moving To
              </label>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="btn-submit-custom" aria-label="Get Free Estimate Now">
              <i class="bi bi-send-fill submit-btn-icon-desktop"></i>
              <i class="bi bi-file-earmark-text-fill submit-btn-icon-mobile"></i>
              <span>Get Free Quote</span>
            </button>
          </div>
          
          <div id="quoteformresults"></div>
        </form>
      </div>
      
    </div>
  </div>