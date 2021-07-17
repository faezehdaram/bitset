<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('تعویض رمز') }}
        </h2>
    </x-slot>

    <div class="py-12"style="float:center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"style="float:center">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"style="width: 30%;float:right">
                <div class="p-6 bg-white border-b border-gray-200"style="width: 100%;text-align:right">
                <form method="POST" action="\passwordf">
            @csrf

            <!-- oldpassword -->
            <div class="mt-4 w=1/2"style="width: 100%;text-align:right">
                <x-label for="oldpassword" :value="__('رمز قدیمی')" />

                <x-input id="oldpassword" class="block mt-1 w-full" type="oldpassword" name="oldpassword" required />
            </div>

            <!-- newPassword -->
            <div class="mt-4 w=1/2"style="width: 100%;text-align:right">
                <x-label for="newpassword" :value="__('رمز جدید')" />

                <x-input id="newpassword" class="block mt-1 w-full"  type="password" name="newpassword" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 w=1/2"style="width: 100%;text-align:right">
                <x-label for="password_confirmation" :value="__('تکرار رمز جدید')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('اعمال تغییرات') }}
                </x-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
