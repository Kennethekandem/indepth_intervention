<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meme Generator</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            },
        };
    </script>
</head>
<body class="antialiased bg-gray-50">
    <form class="container mx-auto p-4 mt-[30px]" action="/api/create" method="post">
        <div class=" grid grid-cols-2 gap-x-[20px] items-center">
            <div class="relative">
                <p class="absolute top-[4%] left-[55%]">Section 1</p>
                <p class="absolute top-[54%] left-[55%]">Section 2</p>
                <img src="/images/drizzy-template.png" alt="drizzy template" class="w-full">

            </div>
            <div class="space-y-4">
                <div class="w-full">
                    <label for="section-1">Text for section 1</label>
                    <input type="text" id="section-1" name="section-1" class="w-full p-4 border border-gray-200 rounded-[10px]" required />
                </div>
                <div class="w-full">
                    <label for="section-2">Text for section 2</label>
                    <input type="text" id="section-2" name="section-2" class="w-full p-4 border border-gray-200 rounded-[10px]" required />
                </div>
                <Button type="submit" class="bg-blue-700 px-4 py-3 rounded-[10px] text-white">Create meme</Button>
            </div>
        </div>
    </form>
</body>
</html>
