@extends('layouts.frontend')

@section('content')
    <section class=" border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="animate-bounce w-full my-2 text-5xl font-bold leading-tight text-right text-gray-800">
                SUARA MAHASISWA
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-col mx-auto">
                <p class="text-gray-600 text-lg font-bold text-center mb-8">
                    PUNYA PERTANYAAN?
                    <br>
                    Hubungi Kami Melalui Formulir Dibawah Ini
                </p>
                <p class="text-gray-600 text-lg font-regular text-center mb-8">
                    (Pertanyaan yang dikirimkan akan kami balas melalui surel kami)
                </p>

                <img src="{{asset('images/logo_kbm.png')}}" alt="" class="mx-auto w-2/3">
                <div class="w-full mx-auto">
                    <form class="w-full mx-auto">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" name="floating_name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required="">
                            <label for="floating_name"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama Lengkap
                                </label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="email" name="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required="">
                            <label for="floating_email"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat
                                Email
                                </label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" name="floating_number"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required="">
                            <label for="floating_number"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nomor HP (0895xxxxxxx)
                                </label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <textarea type="text" name="floating_pesan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required=""></textarea>
                            <label for="floating_pesan"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Pesan Anda
                                </label>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
