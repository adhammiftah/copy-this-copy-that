<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Copy this, Copy that!</title>
</head>
<body style="background-image: url('{{ asset('images/background.png') }}');" class="font-poppins bg bg-repeat bg-top">

    <section class="flex justify-center items-center w-screen h-screen">
        <div class="flex flex-col justify-center w-4/5 max-w-md max-h-[500px] bg-gradient-to-br from-[#1A1B26] to-[#464750] outline outline-offset-2 outline-1 outline-white rounded-2xl">
            <div class="m-4">
                <h1 class="text-3xl text-center text-white font-bold m-10"><span class="text-[#E9768E]">Copy</span> <span class="text-[#BB9AF7]">this</span>, <span class="text-[#8DCE6A]">Copy</span> <span class="text-[#89DDFF]">that</span>!</h1>

                @if($errors->any())
                <div class="text-red-500">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/store" method="POST">
                    @csrf
                    <div class="my-2">
                        <label class="text-white">Whatchu copyin'?</label>
                        <textarea class="resize-none w-full rounded py-3 px-3" name="copies" id="copies" cols="30" rows="3" placeholder="Insert text"></textarea>
                    </div>
                    <div class="my-2">
                        <label class="text-white">Custom ID (Optional)</label>
                        <input class="w-full rounded py-3 px-3" type="text" name="id" id="id" placeholder="6 characters long">
                    </div>
                    <div class="flex justify-center my-6">
                        <button type="submit" class="transition ease-in-out bg-gradient-to-br from-[#1A1B26] to-[#464750] outline outline-offset-2 outline-1 outline-white text-white font-bold w-40 h-10 rounded hover:-translate-y-1 hover:scale-105 hover:shadow-xl">
                            Create link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>


</body>
</html>
