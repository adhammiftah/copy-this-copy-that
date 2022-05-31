<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Copy this, Copy that!</title>
</head>
<body style="background-image: url('{{ asset('images/background.png') }}');" class="font-poppins bg bg-repeat bg-top">

    <section class="flex justify-center items-center w-screen h-screen">
        <div class="flex flex-col justify-center w-4/5 max-w-md max-h-[500px] bg-gradient-to-br from-[#1A1B26] to-[#464750] outline outline-offset-2 outline-1 outline-white rounded-2xl">
            <div class="m-2 flex flex-col justify-center items-center">
                <h1 class="text-3xl text-center text-white font-bold m-10">Your Clipboard</h1>

                <form action="/" class="w-4/5">
                    <div class="my-2">
                        <div class="flex justify-between items-center my-1">
                            <label class="text-white">Your clipboard:</label>
                            <input class="text-white border-2 border-solid border-white rounded p-1 cursor-pointer" type="button" value="Copy" onclick="copy_to_clipboard('clipboard-content');">
                        </div>
                        <textarea id="clipboard-content" class="resize-none w-full rounded py-3 px-3" name="copies" id="copies" cols="30" rows="3" readonly>{{ $clipboard->content }}</textarea>
                    </div>
                    <div class="my-2">
                        <div class="flex justify-between items-center my-1">
                            <label class="text-white">Use this link to access:</label>
                            <input class="text-white border-2 border-solid border-white rounded p-1 cursor-pointer" type="button" value="Copy" onclick="copy_to_clipboard('clipboard-url');">
                        </div>
                        <input id="clipboard-url" class="w-full rounded py-3 px-3" type="text" value="{{ $host.'/'.$clipboard->id }}" readonly>
                    </div>
                    <div class="flex justify-center my-6">
                        <button type="submit" class="transition ease-in-out bg-gradient-to-br from-[#1A1B26] to-[#464750] outline outline-offset-2 outline-1 outline-white text-white font-bold w-44 h-10 rounded hover:-translate-y-1 hover:scale-105 hover:shadow-xl">Create another link</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        function copy_to_clipboard(id)
        {
            document.getElementById(id).select();
            document.execCommand('copy');
        }
    </script>
</body>
</html>
