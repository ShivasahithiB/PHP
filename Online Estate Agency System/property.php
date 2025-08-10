<!DOCTYPE html>
<html>
<head>
    <title>Submit Property</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 30px;
        }

        .form-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 6px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .submit-btn {
            background-color: #007BFF;
            color: white;
            padding: 12px 20px;
            border: none;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Submit Property for Sale</h2>
    <form action="submit_property.php" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group">
                <label for="owner">Owner Name</label>
                <input type="text" name="owner" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="text" name="contact" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="address">Property Address</label>
                <textarea name="address" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select name="city" required>
                    <option value="">Select City</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Mumbai">Mumbai</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="type">Property Type</label>
                <select name="type" required>
                    <option value="">Select Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Villa">Villa</option>
                    <option value="Plot">Plot</option>
                    <option value="Independent House">Independent House</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" accept="image/*">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="bedrooms">Bedrooms</label>
                <input type="number" name="bedrooms" min="1" required>
            </div>
            <div class="form-group">
                <label for="bathrooms">Bathrooms</label>
                <input type="number" name="bathrooms" min="1" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="area">Area (in sqft)</label>
                <input type="number" name="area" min="100" required>
            </div>
            <div class="form-group">
                <label for="price">Price (in ₹)</label>
                <input type="number" name="price" min="10000" required>
            </div>
        </div>

        <button type="submit" class="submit-btn">Submit Property</button>
    </form>
</div>

</body>
</html>
