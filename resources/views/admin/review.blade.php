<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Review Form</title>
    <style>
        .container {
            padding: 50px 10px;
        }

        .review-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .review-form div {
            margin-bottom: 15px;
        }

        .review-form label {
            display: block;
            margin-bottom: 5px;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: #333;
        }

        .review-form input[type="text"],
        .review-form input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .star-rating {
            display: flex;
            gap: 5px;
        }

        .star-rating i {
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
        }

        .star-rating i.selected,
        .star-rating i:hover {
            color: #ffcc00;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="review-form" id="review-form" action="{{ route('createreview') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="rating" value="" id="rating">
            <input type="hidden" name="productId" value="{{ $orderDetails->product_id }}">
            <input type="hidden" name="orderId" value="{{ $orderDetails->order_id }}">
            <div>
                <label for="title"> Review Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="image">Review Image:</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <label>Review Rating:</label>
                <div class="star-rating" id="star-rating">
                    <i class="ri-star-fill" data-value="1"></i>
                    <i class="ri-star-fill" data-value="2"></i>
                    <i class="ri-star-fill" data-value="3"></i>
                    <i class="ri-star-fill" data-value="4"></i>
                    <i class="ri-star-fill" data-value="5"></i>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit Review</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-rating i');
            const ratingInput = document.getElementById('rating');
            const form = document.getElementById('review-form');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    ratingInput.value = value;

                    stars.forEach(s => {
                        s.classList.remove('selected');
                    });

                    for (let i = 0; i < value; i++) {
                        stars[i].classList.add('selected');
                    }
                });
            });
        });
    </script>
</body>

</html>
