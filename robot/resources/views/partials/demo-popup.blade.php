<!-- Request Demo Popup Modal -->
<div class="demo-popup-overlay" id="demoPopupOverlay">
    <div class="demo-popup-modal">
        <button type="button" class="demo-popup-close" id="demoPopupClose">&times;</button>
        <div class="demo-popup-content">
            <div class="demo-popup-header">
                <span class="demo-popup-subtitle">{{ setting('contact_subtitle', 'Get Started') }}</span>
                <h2 class="demo-popup-title">Request a Demo</h2>
                <p class="demo-popup-desc">
                    {{ setting('contact_description', 'Contact our knowledgeable professionals to see how service robots can transform your business.') }}
                </p>
            </div>
            <form action="#" method="post" class="demo-popup-form" id="demoPopupForm">
                @csrf
                <div class="form-row">
                    <input type="text" name="name" placeholder="Full Name *" required>
                </div>
                <div class="form-row">
                    <input type="email" name="email" placeholder="Email Address *" required>
                </div>
                <div class="form-row">
                    <input type="text" name="company" placeholder="Company/Restaurant Name">
                </div>
                <div class="form-row">
                    <input type="tel" name="phone" placeholder="Phone Number">
                </div>
                <div class="form-row">
                    <select name="venue_type">
                        <option value="">Select Venue Type</option>
                        <option value="restaurant">Restaurant</option>
                        <option value="casino">Casino Restaurant</option>
                        <option value="senior">Senior Living Facility</option>
                        <option value="university">University Dining</option>
                        <option value="corporate">Corporate Cafeteria</option>
                        <option value="hotel">Hotel/Resort</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-row">
                    <textarea name="message" rows="3" placeholder="Tell us about your needs..."></textarea>
                </div>
                <div class="form-row discount-code-row">
                    <input type="text" name="discount_code" id="discountCodeInput"
                        placeholder="Have a referral/discount code? (Optional)">
                    <span class="discount-code-status" id="discountCodeStatus"></span>
                </div>
                <input type="hidden" name="product_source" id="demoProductSource" value="">
                <input type="hidden" name="page_url" id="demoPageUrl" value="">
                <button type="submit" class="demo-popup-submit">
                    <span>Request Demo</span>
                    <i class="fa fa-arrow-right"></i>
                </button>
                <div class="demo-popup-message" id="demoPopupMessage"
                    style="display: none; margin-top: 15px; padding: 15px; border-radius: 10px; text-align: center;">
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Demo Popup Styles */
    .demo-popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(8px);
        z-index: 99999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .demo-popup-overlay.active {
        display: flex;
        opacity: 1;
    }

    .demo-popup-modal {
        background: #000;
        border-radius: 20px;
        max-width: 500px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
        transform: scale(0.9) translateY(20px);
        transition: transform 0.3s ease;
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5), 0 0 40px rgba(108, 99, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .demo-popup-overlay.active .demo-popup-modal {
        transform: scale(1) translateY(0);
    }

    .demo-popup-close {
        position: absolute;
        top: 15px;
        right: 20px;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        color: #fff;
        font-size: 28px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
    }

    .demo-popup-close:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: rotate(90deg);
    }

    .demo-popup-content {
        padding: 40px;
    }

    .demo-popup-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .demo-popup-subtitle {
        display: inline-block;
        color: #448E91;
        background: none;
        -webkit-text-fill-color: initial;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
    }

    .demo-popup-title {
        color: #fff;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .demo-popup-desc {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        line-height: 1.6;
    }

    .demo-popup-form .form-row {
        margin-bottom: 15px;
    }

    .demo-popup-form input,
    .demo-popup-form select,
    .demo-popup-form textarea {
        width: 100%;
        padding: 14px 18px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        color: #fff;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .demo-popup-form input::placeholder,
    .demo-popup-form textarea::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .demo-popup-form input:focus,
    .demo-popup-form select:focus,
    .demo-popup-form textarea:focus {
        outline: none;
        border-color: #448E91;
        background: rgba(68, 142, 145, 0.1);
    }

    .demo-popup-form select {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23ffffff' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
    }

    .demo-popup-form select option {
        background: #1a1a2e;
        color: #fff;
    }

    .demo-popup-submit {
        width: 100%;
        padding: 16px 30px;
        background: linear-gradient(135deg, #2c6b6e 0%, #448E91 50%, #5ba8aa 100%);
        border: none;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .demo-popup-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(68, 142, 145, 0.4);
    }

    .demo-popup-submit i {
        transition: transform 0.3s ease;
    }

    .demo-popup-submit:hover i {
        transform: translateX(5px);
    }

    /* Responsive */
    @media (max-width: 576px) {
        .demo-popup-content {
            padding: 30px 20px;
        }

        .demo-popup-title {
            font-size: 24px;
        }
    }

    /* Discount Code Validation Styles */
    .discount-code-row {
        position: relative;
    }

    .discount-code-status {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        font-weight: 600;
    }

    .discount-code-status.valid {
        color: #28a745;
    }

    .discount-code-status.invalid {
        color: #dc3545;
    }

    .discount-code-status.checking {
        color: #ffc107;
    }

    #discountCodeInput.valid-code {
        border-color: #28a745 !important;
        background: rgba(40, 167, 69, 0.1) !important;
    }

    #discountCodeInput.invalid-code {
        border-color: #dc3545 !important;
        background: rgba(220, 53, 69, 0.1) !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const overlay = document.getElementById('demoPopupOverlay');
        const closeBtn = document.getElementById('demoPopupClose');
        const form = document.getElementById('demoPopupForm');
        const messageDiv = document.getElementById('demoPopupMessage');

        // Open popup when clicking Request Demo buttons
        document.querySelectorAll('.open-demo-popup, [data-demo-popup]').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();

                // Capture product source if available
                var productSource = document.getElementById('demoProductSource');
                var pageUrl = document.getElementById('demoPageUrl');

                if (productSource) {
                    productSource.value = this.getAttribute('data-product') || '';
                }
                if (pageUrl) {
                    pageUrl.value = window.location.href;
                }

                // Reset form and message
                form.reset();
                messageDiv.style.display = 'none';
                
                // Reset discount code status
                const codeInput = document.getElementById('discountCodeInput');
                const codeStatus = document.getElementById('discountCodeStatus');
                if (codeInput) {
                    codeInput.classList.remove('valid-code', 'invalid-code');
                    codeInput.value = '';
                }
                if (codeStatus) {
                    codeStatus.innerHTML = '';
                    codeStatus.className = 'discount-code-status';
                }

                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Discount Code Validation
        const discountInput = document.getElementById('discountCodeInput');
        const discountStatus = document.getElementById('discountCodeStatus');
        let validationTimeout;

        if (discountInput && discountStatus) {
            discountInput.addEventListener('input', function() {
                const code = this.value.trim();
                
                // Reset states
                clearTimeout(validationTimeout);
                this.classList.remove('valid-code', 'invalid-code');
                discountStatus.innerHTML = '';
                discountStatus.className = 'discount-code-status';

                if (code.length === 0) return;

                // Show checking state
                discountStatus.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Checking...';
                discountStatus.classList.add('checking');

                // Debounce validation
                validationTimeout = setTimeout(() => {
                    fetch('{{ route("discount.validate") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        },
                        body: JSON.stringify({ code: code })
                    })
                    .then(response => response.json())
                    .then(data => {
                        discountStatus.classList.remove('checking');
                        
                        if (data.valid) {
                            discountInput.classList.add('valid-code');
                            discountStatus.innerHTML = '<i class="fa fa-check"></i> ' + data.message;
                            discountStatus.classList.add('valid');
                        } else {
                            discountInput.classList.add('invalid-code');
                            discountStatus.innerHTML = '<i class="fa fa-times"></i> ' + data.message;
                            discountStatus.classList.add('invalid');
                        }
                    })
                    .catch(error => {
                        console.error('Error validating code:', error);
                        discountStatus.innerHTML = '';
                    });
                }, 500); // 500ms delay
            });
        }

        // Form submission via AJAX
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const submitBtn = form.querySelector('.demo-popup-submit');
                const originalBtnText = submitBtn.innerHTML;

                // Disable button and show loading
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Sending...</span> <i class="fa fa-spinner fa-spin"></i>';

                // Hide previous messages
                messageDiv.style.display = 'none';

                // Get form data
                const formData = new FormData(form);

                fetch('{{ route("demo.request") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    }
                })
                    .then(response => response.json())
                    .then(data => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;

                        if (data.success) {
                            // Show success message
                            messageDiv.style.display = 'block';
                            messageDiv.style.background = 'rgba(68, 142, 145, 0.3)';
                            messageDiv.style.color = '#fff';
                            messageDiv.innerHTML = '<i class="fa fa-check-circle" style="margin-right: 8px;"></i>' + data.message;

                            // Reset form
                            form.reset();

                            // Close popup after 3 seconds
                            setTimeout(function () {
                                overlay.classList.remove('active');
                                document.body.style.overflow = '';
                                messageDiv.style.display = 'none';
                            }, 3000);
                        } else {
                            // Show error message
                            messageDiv.style.display = 'block';
                            messageDiv.style.background = 'rgba(220, 53, 69, 0.3)';
                            messageDiv.style.color = '#fff';
                            messageDiv.innerHTML = '<i class="fa fa-exclamation-circle" style="margin-right: 8px;"></i>' + (data.message || 'Something went wrong. Please try again.');
                        }
                    })
                    .catch(error => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;

                        // Show error message
                        messageDiv.style.display = 'block';
                        messageDiv.style.background = 'rgba(220, 53, 69, 0.3)';
                        messageDiv.style.color = '#fff';
                        messageDiv.innerHTML = '<i class="fa fa-exclamation-circle" style="margin-right: 8px;"></i>Something went wrong. Please try again.';

                        console.error('Error:', error);
                    });
            });
        }

        // Close popup
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Close on overlay click
        if (overlay) {
            overlay.addEventListener('click', function (e) {
                if (e.target === overlay) {
                    overlay.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
</script>