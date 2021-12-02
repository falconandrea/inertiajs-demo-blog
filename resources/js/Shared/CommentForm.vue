<template>
    <div>
        <hr class="mt-6" />
        <h4 class="font-bold font-sans mt-4">Lascia un commento:</h4>
        <form method="POST" action="">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nome
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nome">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
                    Commento
                </label>
                <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="comment" placeholder="Commento"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Invia
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {

}
</script>
