<!-- Newsletter Subscription Popup Modal -->
<div class="newsletter-popup-overlay" id="newsletterPopupOverlay">
    <div class="newsletter-popup-modal">
        <button type="button" class="newsletter-popup-close" id="newsletterPopupClose">&times;</button>
        <div class="newsletter-popup-content">
            <div class="newsletter-popup-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <div class="newsletter-popup-header">
                <h2 class="newsletter-popup-title">Stay Updated</h2>
                <p class="newsletter-popup-desc">
                    Subscribe to our newsletter for the latest updates on robotics innovations, product launches, and
                    industry insights.
                </p>
            </div>
            <form class="newsletter-popup-form" id="newsletterForm">
                @csrf
                <div class="form-row">
                    <input type="email" name="email" id="newsletterEmail" placeholder="Enter your email address"
                        required>
                </div>
                <input type="hidden" name="source" value="footer">
                <button type="submit" class="newsletter-popup-submit" id="newsletterSubmitBtn">
                    <span>Subscribe Now</span>
                    <i class="fa fa-paper-plane"></i>
                </button>
            </form>
            <div class="newsletter-popup-message" id="newsletterMessage" style="display: none;"></div>
            <p class="newsletter-popup-privacy">
                <i class="fas fa-lock"></i> We respect your privacy. Unsubscribe anytime.
            </p>
        </div>
    </div>
</div>

<style>
    /* Newsletter Popup Styles */
    .newsletter-popup-overlay {
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

    .newsletter-popup-overlay.active {
        display: flex;
        opacity: 1;
    }

    .newsletter-popup-modal {
        background: linear-gradient(145deg, #0a0a0a 0%, #1a1a2e 100%);
        border-radius: 24px;
        max-width: 450px;
        width: 100%;
        position: relative;
        transform: scale(0.9) translateY(20px);
        transition: transform 0.3s ease;
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5), 0 0 60px rgba(68, 142, 145, 0.15);
        border: 1px solid rgba(68, 142, 145, 0.2);
        overflow: hidden;
    }

    .newsletter-popup-overlay.active .newsletter-popup-modal {
        transform: scale(1) translateY(0);
    }

    .newsletter-popup-close {
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

    .newsletter-popup-close:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: rotate(90deg);
    }

    .newsletter-popup-content {
        padding: 50px 40px 40px;
        text-align: center;
    }

    .newsletter-popup-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #448E91 0%, #5ba8aa 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        box-shadow: 0 10px 30px rgba(68, 142, 145, 0.4);
    }

    .newsletter-popup-icon i {
        font-size: 32px;
        color: #fff;
    }

    .newsletter-popup-title {
        color: #fff;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .newsletter-popup-desc {
        color: rgba(255, 255, 255, 0.7);
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .newsletter-popup-form .form-row {
        margin-bottom: 15px;
    }

    .newsletter-popup-form input[type="email"] {
        width: 100%;
        padding: 16px 20px;
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: #fff;
        font-size: 15px;
        transition: all 0.3s ease;
        text-align: center;
    }

    .newsletter-popup-form input[type="email"]::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .newsletter-popup-form input[type="email"]:focus {
        outline: none;
        border-color: #448E91;
        background: rgba(68, 142, 145, 0.1);
    }

    .newsletter-popup-submit {
        width: 100%;
        padding: 16px 30px;
        background: linear-gradient(135deg, #2c6b6e 0%, #448E91 50%, #5ba8aa 100%);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .newsletter-popup-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(68, 142, 145, 0.4);
    }

    .newsletter-popup-submit:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    .newsletter-popup-submit i {
        transition: transform 0.3s ease;
    }

    .newsletter-popup-submit:hover i {
        transform: translateX(5px);
    }

    .newsletter-popup-message {
        padding: 15px 20px;
        border-radius: 10px;
        margin-top: 15px;
        font-size: 14px;
        text-align: center;
    }

    .newsletter-popup-message.success {
        background: rgba(68, 142, 145, 0.2);
        color: #5ba8aa;
        border: 1px solid rgba(68, 142, 145, 0.3);
    }

    .newsletter-popup-message.error {
        background: rgba(239, 100, 100, 0.2);
        color: #ef6464;
        border: 1px solid rgba(239, 100, 100, 0.3);
    }

    .newsletter-popup-privacy {
        margin-top: 20px;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.4);
    }

    .newsletter-popup-privacy i {
        margin-right: 5px;
    }

    /* Responsive */
    @media (max-width: 576px) {
        .newsletter-popup-content {
            padding: 40px 25px 30px;
        }

        .newsletter-popup-title {
            font-size: 24px;
        }

        .newsletter-popup-icon {
            width: 70px;
            height: 70px;
        }

        .newsletter-popup-icon i {
            font-size: 28px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const overlay = document.getElementById('newsletterPopupOverlay');
        const closeBtn = document.getElementById('newsletterPopupClose');
        const form = document.getElementById('newsletterForm');
        const submitBtn = document.getElementById('newsletterSubmitBtn');
        const messageDiv = document.getElementById('newsletterMessage');
        const emailInput = document.getElementById('newsletterEmail');

        // Open popup when clicking Newsletter Subscribe buttons
        document.querySelectorAll('.open-newsletter-popup, [data-newsletter-popup]').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
                // Reset form state
                form.reset();
                messageDiv.style.display = 'none';
                submitBtn.disabled = false;
                submitBtn.querySelector('span').textContent = 'Subscribe Now';
            });
        });

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

        // Form submission
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const email = emailInput.value.trim();
                if (!email) return;

                // Disable button and show loading state
                submitBtn.disabled = true;
                submitBtn.querySelector('span').textContent = 'Subscribing...';
                messageDiv.style.display = 'none';

                // Get CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                    || document.querySelector('input[name="_token"]')?.value;

                fetch('{{ route("newsletter.subscribe") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        email: email,
                        source: 'footer'
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        messageDiv.style.display = 'block';
                        if (data.success) {
                            messageDiv.className = 'newsletter-popup-message success';
                            messageDiv.innerHTML = '<i class="fas fa-check-circle"></i> ' + data.message;
                            form.reset();
                            // Auto-close after 3 seconds on success
                            setTimeout(function () {
                                overlay.classList.remove('active');
                                document.body.style.overflow = '';
                            }, 3000);
                        } else {
                            messageDiv.className = 'newsletter-popup-message error';
                            messageDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + data.message;
                        }
                        submitBtn.disabled = false;
                        submitBtn.querySelector('span').textContent = 'Subscribe Now';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        messageDiv.style.display = 'block';
                        messageDiv.className = 'newsletter-popup-message error';
                        messageDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> Something went wrong. Please try again.';
                        submitBtn.disabled = false;
                        submitBtn.querySelector('span').textContent = 'Subscribe Now';
                    });
            });
        }
    });
</script>