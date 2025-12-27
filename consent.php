<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informed Consent</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f1ec 0%, #e8dfd5 100%);
            min-height: 100vh;
            padding: 15px;
            line-height: 1.6;
            color: #333;
        }

        .consent-container {
            max-width: 650px;
            width: 100%;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            animation: fadeIn 0.5s ease-in;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .consent-header {
            background: #ebcfadff;
            padding: 20px;
            text-align: center;
        }

        .consent-header h1 {
            color: #ffffff;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .consent-body {
            padding: 20px;
            max-height: 70vh;
            overflow-y: auto;
        }

        .consent-body::-webkit-scrollbar {
            width: 8px;
        }

        .consent-body::-webkit-scrollbar-track {
            background: #f5f5f5;
        }

        .consent-body::-webkit-scrollbar-thumb {
            background: #d4c4b0;
            border-radius: 4px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            color: #8b7356ff;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .section p {
            color: #555;
            font-size: 14px;
            line-height: 1.7;
            text-align: justify;
        }

        .contact-info {
            background: #fef8f3;
            padding: 12px;
            border-radius: 6px;
            margin-top: 8px;
        }

        .contact-info p {
            color: #666;
            font-size: 13px;
            margin-bottom: 4px;
        }

        .contact-info p:last-child {
            margin-bottom: 0;
        }

        .important-notice {
            background: #fef8f3;
            border-left: 3px solid #d4c4b0;
            padding: 14px;
            margin: 20px 0;
            border-radius: 4px;
        }

        .important-notice p {
            color: #666;
            font-size: 13px;
            margin: 0;
            line-height: 1.6;
        }

        .consent-footer {
            padding: 20px;
            background: #fafafa;
            border-top: 1px solid #e0e0e0;
        }

        .choices {
            margin-bottom: 16px;
        }

        .choice-option {
            display: flex;
            align-items: flex-start;
            padding: 12px;
            background: white;
            border: 2px solid #ebbd69ff;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .choice-option:hover {
            border-color: #b88e5cff;
            background: #d8a84eff;
        }

        .choice-option input[type="radio"] {
            margin-right: 12px;
            margin-top: 3px;
            accent-color: #d4c4b0;
            cursor: pointer;
            width: 18px;
            height: 18px;
            flex-shrink: 0;
        }

        .choice-option label {
            cursor: pointer;
            font-size: 13px;
            color: #555;
            line-height: 1.5;
        }

        .actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        button {
            width: 100%;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s ease;
            letter-spacing: 0.3px;
        }

        .continue-btn {
            background: #e2af70ff;
            color: #ffffff;
        }

        .continue-btn:hover:not(:disabled) {
            background: #946e40ff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(212, 196, 176, 0.3);
        }

        .continue-btn:disabled {
            background: #e0e0e0;
            color: #999;
            cursor: not-allowed;
        }

        button:active:not(:disabled) {
            transform: translateY(0);
        }

        /* Mobile optimizations */
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .consent-container {
                border-radius: 10px;
            }

            .consent-header {
                padding: 18px 16px;
            }

            .consent-header h1 {
                font-size: 20px;
            }

            .consent-body {
                padding: 16px;
                max-height: 65vh;
            }

            .section h2 {
                font-size: 15px;
            }

            .section p {
                font-size: 13px;
            }

            .contact-info p {
                font-size: 12px;
            }

            .consent-footer {
                padding: 16px;
            }

            .choice-option label {
                font-size: 12px;
            }

            button {
                padding: 13px 20px;
                font-size: 14px;
            }
        }

        /* Very small screens */
        @media (max-width: 360px) {
            .consent-header h1 {
                font-size: 18px;
            }

            .section p,
            .choice-option label {
                font-size: 12px;
            }

            .contact-info p {
                font-size: 11px;
            }
        }
    </style>
</head>
<body>

<div class="consent-container">
    <div class="consent-header">
        <h1>INFORMED CONSENT</h1>
    </div>

    <div class="consent-body">
        <div class="section">
            <h2>Purpose of the Study:</h2>
            <p>
                This study aims to develop and validate a Filipino web-based archetype personality 
                inventory designed to assess personality traits based on universally recognized 
                archetypal patterns within the Filipino cultural context. The instrument seeks to 
                provide a standardized, reliable, and culturally responsive tool that captures how 
                individuals express core archetypal characteristics through thoughts, emotions, and behaviors.
            </p>
        </div>

        <div class="section">
            <h2>What You Will Be Asked to Do:</h2>
            <p>
                You will be asked to answer a brief set of demographic questions followed by a series 
                of statements included in the Archetype Personality Inventory. You will indicate the 
                extent to which each statement reflects your personal experiences and tendencies.
            </p>
        </div>

        <div class="section">
            <h2>Estimated Time to Complete:</h2>
            <p>
                The survey is expected to take approximately 7–10 minutes to complete.
            </p>
        </div>

        <div class="section">
            <h2>Voluntary Participation:</h2>
            <p>
                Your participation in this study is entirely voluntary. You may choose not to answer 
                any question and may withdraw from the study at any time without any penalty or loss 
                of benefits.
            </p>
        </div>

        <div class="section">
            <h2>Confidentiality:</h2>
            <p>
                All responses will remain anonymous. No personally identifying information will be 
                collected. The data gathered will be stored securely and will be used solely for 
                academic research and analysis purposes.
            </p>
        </div>

        <div class="section">
            <h2>Risks and Discomforts:</h2>
            <p>
                There are no known risks associated with participation in this study. Some items may 
                prompt self-reflection; however, no sensitive or invasive personal information will 
                be requested.
            </p>
        </div>

        <div class="section">
            <h2>Benefits:</h2>
            <p>
                Although there may be no direct personal benefit from participating, your responses 
                will contribute to the development of a culturally grounded personality assessment tool. 
                This instrument may be useful for future psychological research, assessment, and 
                understanding of personality within the Filipino context.
            </p>
        </div>

        <div class="section">
            <h2>Research Team & Contact Information:</h2>
            <p>
                For any questions or concerns regarding this study, you may contact the principal researcher:
            </p>
            <div class="contact-info">
                <p><strong>Name:</strong> Marky L. Latergo</p>
                <p><strong>Email:</strong> mllatergo.chmsu@gmail.com</p>
                <p><strong>Phone:</strong> 09287546718</p>
            </div>
        </div>

        <div class="important-notice">
            <p>
                <strong>Thank you for your willingness to participate in this study.</strong> 
                Your honest responses will play a vital role in the development and validation 
                of this personality inventory.
            </p>
        </div>

        <div class="section">
            <p>
                By agreeing to this consent form, I confirm that I have read and understood the 
                information presented above and have had the opportunity to ask questions. I understand 
                that I will be given a copy of this consent form.
            </p>
        </div>
    </div>

    <div class="consent-footer">
        <div class="choices">
            <div class="choice-option" onclick="selectChoice('agree')">
                <input type="radio" id="agree" name="consent" value="agree">
                <label for="agree">I agree to participate in this study. I understand that my participation is voluntary and I am free to terminate the participation at any time, and without cost.</label>
            </div>

            <div class="choice-option" onclick="selectChoice('decline')">
                <input type="radio" id="decline" name="consent" value="decline">
                <label for="decline">I do not agree to participate.</label>
            </div>
        </div>

        <div class="actions">
            <button class="continue-btn" id="continueBtn" onclick="handleContinue()" disabled>Continue</button>
        </div>
    </div>
</div>

<script>
    function selectChoice(choice) {
        document.getElementById(choice).checked = true;
        document.getElementById('continueBtn').disabled = false;
    }

    function handleContinue() {
        const agreeRadio = document.getElementById('agree');
        const declineRadio = document.getElementById('decline');

        if (agreeRadio.checked) {
            window.location.href = "user_register.php";
        } else if (declineRadio.checked) {
            window.location.href = "index.php";
        }
    }

    // Enable continue button when a choice is selected
    document.querySelectorAll('input[name="consent"]').forEach(radio => {
        radio.addEventListener('change', function() {
            document.getElementById('continueBtn').disabled = false;
        });
    });
</script>

</body>

</html>
