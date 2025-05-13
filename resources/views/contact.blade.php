<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="min-h-screen place-content-center">
        <div class="transition-all duration-500 ease-in-out px-4 sm:px-0 flex flex-col items-center justify-center ">
            <div class="grid justify-items-center align-center ">
                <p
                    class="hover:scale-105 transition-all cursor-pointer duration-500 ease-in-out text-3xl sm:text-5xl font-bold justify-center py-5">
                    Find Me On</p>
            </div>

            <div class="mb-8 md:my-7">
                @include('components.logo')
            </div>

            <div
                class="mx-auto max-w-md border-1 border-gray-900 rounded-2xl h-auto text-black transition-all duration-500 ease-linear">
                <div class="flex justify-center">
                    <div class="w-full p-10 bg-dark text-white" data-rounded="rounded-lg" data-rounded-max="rounded-full"
                        x-data>
                        <h3 class="mb-6 text-2xl font-medium text-center">Send Me a Massage</h3>
                        <input type="email" name="email" id="email"
                            class="block w-full px-4 py-3 mb-4 border-2 border-gray-800 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none placeholder:text-neutral-600"
                            data-rounded="rounded-lg" data-primary="blue-500" placeholder="Email address">

                        <textarea x-data="{
                            resize() {
                                $el.style.height = '0px';
                                $el.style.height = $el.scrollHeight + 'px'
                            }
                        }" x-init="resize()" @input="resize()" type="text"
                            placeholder="Type your message here."
                            class="block w-full h-auto min-h-[80px] px-4 py-3 mb-6 text-sm bg-dark border rounded-md border-gray-800  placeholder:text-neutral-600 focus:ring focus:ring-blue-500 focus:outline-none disabled:cursor-not-allowed disabled:opacity-50"></textarea>

                        <div x-data="{
                            title: 'Default Toast Notification',
                            description: '',
                            type: 'default',
                            position: 'top-center',
                            expanded: false,
                            popToast(custom) {
                                let html = '';
                                if (typeof custom != 'undefined') {
                                    html = custom;
                                }
                                toast(this.title, { description: this.description, type: this.type, position: this.position, html: html })
                            }
                        }" x-init="window.toast = function(message, options = {}) {
                            let description = '';
                            let type = 'default';
                            let position = 'top-center';
                            let html = '';
                            if (typeof options.description != 'undefined') description = options.description;
                            if (typeof options.type != 'undefined') type = options.type;
                            if (typeof options.position != 'undefined') position = options.position;
                            if (typeof options.html != 'undefined') html = options.html;
                        
                            window.dispatchEvent(new CustomEvent('toast-show', { detail: { type: type, message: message, description: description, position: position, html: html } }));
                        }
                        
                        window.customToastHTML = `
                                        <div class='relative flex items-start justify-center p-4'>
                                            <img src='https://cdn.devdojo.com/images/august2023/headshot-new.jpeg' class='w-10 h-10 mr-2 rounded-full'>
                                            <div class='flex flex-col'>
                                                <p class='text-sm font-medium text-gray-800'>New Friend Request</p>
                                                <p class='mt-1 text-xs leading-none text-gray-800'>Friend request from John Doe.</p>
                                                <div class='flex mt-3'>
                                                    <button type='button' @click='burnToast(toast.id)' class='inline-flex items-center px-2 py-1 text-xs font-semibold text-white bg-indigo-600 rounded shadow-sm hover:bg-indigo-500  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'>Accept</button>
                                                    <button type='button' @click='burnToast(toast.id)' class='inline-flex items-center px-2 py-1 ml-3 text-xs font-semibold text-gray-900 bg-white rounded shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50'>Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    `" class="relative space-y-5">
                            <div class ="block">
                                <button @click="title='Berhasil Terkirim'; type='success'; popToast()"
                                    :class="{ 'ring-2 ring-neutral-200/60': type=='success' }"
                                    class="hover:scale-105 ease-in-out transition-all duration-200 w-full px-3 py-4 font-medium flex items-center justify-center gap-2 text-white bg-blue-600 rounded-lg"
                                    data-primary="blue-600" data-rounded="rounded-lg">
                                    Send
                                    <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d=" M10.5 12.5L3 9l18-6-6 18-3.5-7.5L9 12l1.5.5z" />
                                    </svg>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

</x-layout>
