<div class="notifications">

    @if (session('success'))
        <x-alert msg="{{ session('success') }}" type="success">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30">
                <path
                    d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21.707,12.707l-7.56,7.56 c-0.188,0.188-0.442,0.293-0.707,0.293s-0.52-0.105-0.707-0.293l-3.453-3.453c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0 l2.746,2.746l6.853-6.853c0.391-0.391,1.023-0.391,1.414,0S22.098,12.316,21.707,12.707z" />
            </svg>
        </x-alert>
    @endif



    @if (session('error'))
        <x-alert msg="{{ session('error') }}" type="error">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26">
                <path
                    d="M25.289063 20.132813L15.234375 2.71875C14.003906 0.589844 11.996094 0.589844 10.765625 2.71875L0.710938 20.132813C-0.519531 22.261719 0.488281 24 2.945313 24L23.054688 24C25.511719 24 26.515625 22.261719 25.289063 20.132813 Z M 11.617188 7.660156C11.980469 7.269531 12.4375 7.074219 13 7.074219C13.5625 7.074219 14.019531 7.265625 14.382813 7.652344C14.738281 8.035156 14.921875 8.519531 14.921875 9.101563C14.921875 9.597656 14.171875 13.269531 13.921875 15.9375L12.113281 15.9375C11.894531 13.269531 11.078125 9.597656 11.078125 9.101563C11.078125 8.527344 11.261719 8.046875 11.617188 7.660156 Z M 14.355469 20.355469C13.976563 20.722656 13.523438 20.910156 13 20.910156C12.476563 20.910156 12.023438 20.722656 11.644531 20.355469C11.265625 19.984375 11.078125 19.539063 11.078125 19.011719C11.078125 18.488281 11.265625 18.035156 11.644531 17.65625C12.023438 17.277344 12.476563 17.089844 13 17.089844C13.523438 17.089844 13.976563 17.277344 14.355469 17.65625C14.734375 18.035156 14.921875 18.488281 14.921875 19.011719C14.921875 19.539063 14.734375 19.984375 14.355469 20.355469Z" />
            </svg>
        </x-alert>
    @endif



    @if (session('warning'))
        <x-alert msg="{{ session('warning') }}" type="warning">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30">
                <path
                    d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M16.212,8l-0.2,9h-2.024l-0.2-9 H16.212z M15.003,22.189c-0.828,0-1.323-0.441-1.323-1.182c0-0.755,0.494-1.196,1.323-1.196c0.822,0,1.316,0.441,1.316,1.196 C16.319,21.748,15.825,22.189,15.003,22.189z" />
            </svg>
        </x-alert>
    @endif




    @if (session('info'))
        <x-alert msg="{{ session('info') }}" type="info">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30">
                <path
                    d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M16,21h-2v-7h2V21z M15,11.5 c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S15.828,11.5,15,11.5z" />
            </svg>
        </x-alert>
    @endif

</div>
