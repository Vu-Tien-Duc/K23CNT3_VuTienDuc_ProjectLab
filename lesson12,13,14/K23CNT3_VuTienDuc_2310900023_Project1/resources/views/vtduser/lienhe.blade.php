<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Liên Hệ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Liên Hệ phonestore</h1>

        <!-- Form Liên Hệ -->
        <form action="mailto:your_email@example.com" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-lg space-y-8 max-w-3xl mx-auto">
            
            <!-- Họ và tên -->
            <div>
                <label for="name" class="block text-lg font-semibold text-gray-700 mb-2">Họ và tên</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-lg font-semibold text-gray-700 mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300" required>
            </div>

            <!-- Chủ đề -->
            <div>
                <label for="subject" class="block text-lg font-semibold text-gray-700 mb-2">Chủ đề</label>
                <input type="text" name="subject" id="subject" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300" required>
            </div>

            <!-- Tin nhắn -->
            <div>
                <label for="message" class="block text-lg font-semibold text-gray-700 mb-2">Tin nhắn</label>
                <textarea name="message" id="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300" required></textarea>
            </div>

            <!-- Nút Gửi -->
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-8 py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                    Gửi
                </button>
            </div>
        </form>
    </div>

</body>
</html>
