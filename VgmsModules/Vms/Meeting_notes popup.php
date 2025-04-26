<?php
// Simulated data (replace with actual backend logic later)
$visitorName = "John Doe";
$employeeName = "Jane Employee";
$meetingID = uniqid("MTG-");
$currentDateTime = date("Y-m-d\TH:i");
?>

<html>

<head>
    <title>Meeting Notes Popup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: rgba(0, 0, 0, 0.4);
            margin: 0;
            padding: 0;
        }

        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 9999;
        }

        .modal-content {
            background-color: #0b0d17; /* Dark background */
            padding: 30px;
            border-radius: 12px;
            width: 60%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0px 0px 15px #00000066;
            transform: scale(0.8);
            opacity: 0;
        }

        .modal-content::-webkit-scrollbar {
            width: 8px;
        }

        .modal-content::-webkit-scrollbar-thumb {
            background-color: #151822; /* Same as dark input bg */
            border-radius: 4px;
        }

        .modal-content h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #ffffff;
            font-weight: 600;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #2c2f3a;
            margin: 10px 0 25px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        label {
            width: 200px;
            font-weight: 600;
            margin-right: 15px;
            color: #ffffff;
        }

        input,
        textarea,
        select {
            flex: 1;
            padding: 10px;
            border: 1px solid #2c2f3a;
            border-radius: 5px;
            background-color: #151822;
            color: #ffffff;
        }

        textarea {
            resize: vertical;
        }

        .hidden {
            display: none;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .reset-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

    </style>
</head>

<body>
    <div class="modal">
        <div class="modal-content" id="popup">
            <h2><strong>Meeting Notes</strong></h2>
            <hr>
            <form>
                <div class="form-group">
                    <label>Meeting ID</label>
                    <input type="text" value="<?php echo $meetingID; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Visitor Name</label>
                    <input type="text" value="<?php echo $visitorName; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Employee Name</label>
                    <input type="text" value="<?php echo $employeeName; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Meeting Date & Time</label>
                    <input type="datetime-local" value="<?php echo $currentDateTime; ?>">
                </div>
                <div class="form-group">
                    <label>Meeting Status</label>
                    <select id="status" onchange="toggleRescheduleField()">
                        <option value="Completed">Completed</option>
                        <option value="Rescheduled">Rescheduled</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="form-group hidden" id="rescheduleField">
                    <label>Rescheduled Date</label>
                    <input type="date">
                </div>
                <div class="form-group">
                    <label>Discussion Summary</label>
                    <textarea rows="4" placeholder="Enter meeting discussion summary..."></textarea>
                </div>
                <div class="form-group">
                    <label>Action Items</label>
                    <textarea rows="3" placeholder="Enter follow-up action items..."></textarea>
                </div>
                <div class="form-group">
                    <label>Payment Amount (If applicable)</label>
                    <input type="number" placeholder="Enter amount">
                </div>
                <div class="form-group">
                    <label>Additional Comments</label>
                    <textarea rows="3" placeholder="Any additional notes..."></textarea>
                </div>

                <!-- Updated Attachments section -->
                <div class="form-group">
                    <label>Upload Images</label>
                    <input type="file" accept="image/*" multiple>
                </div>
                <div class="form-group">
                    <label>Upload Files</label>
                    <input type="file" multiple>
                </div>

                <div class="form-actions">
                    <button type="reset" class="reset-btn">Reset</button>
                    <button type="submit" class="btn-primary">Submit & Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleRescheduleField() {
            const status = document.getElementById('status').value;
            const rescheduleField = document.getElementById('rescheduleField');
            rescheduleField.classList.toggle('hidden', status !== 'Rescheduled');
        }

        // GSAP Animation
        window.onload = function() {
            gsap.to("#popup", { duration: 0.6, opacity: 1, scale: 1, ease: "power2.out" });
        };
    </script>
</body>

</html>
