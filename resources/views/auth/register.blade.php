<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <div class="mt-4">
            <x-label for="name" value="{{ __('학교명(학교명을 입력 후 학교 검색 버튼을 눌러주세요.)') }}" />
            <x-input class="block w-full mt-1" type="text" id="schoolSearch" name="schoolSearch"  required autofocus/>

        </div>
        <div class="mt-4">
            <x-button class="ms-4" id="schoolBtn" name="schoolBtn">
                {{ __('1. 학교 검색') }}
            </x-button>
        </div>

        <div class="mt-4" class="schoolsearch12" id="schoolsearch12">
        </div>


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-label for="name" value="{{ __('학교명(이 학교명은 수정하지 마세요.)') }}" />
                <x-input class="block w-full mt-1" type="text" name="name" id="name" :value="old('name')" required  onclick="getCheck()"/>

            </div>

            <div class="mt-4">
                <x-label for="code" value="{{ __('학교 코드(이 학교 코드는 수정하지 마세요.)') }}" />
                <x-input class="block w-full mt-1" type="text" name="code" id="code" :value="old('code')"  required  />

            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('이메일') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('비밀번호') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('비밀번호 확인') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('이미 가입하셨다면 로그인으로 이동') }}
                </a>

                <x-button class="ms-4">
                    {{ __('3. 가입하기') }}
                </x-button>
            </div>
        </form>
        <!-- Modal -->
        <div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog"
            aria-labelledby="inputFormModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header" id="inputFormModalLabel">
                        <h5 class="modal-title">Welcome to <b>SwchoolWiki</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg></button>
                    </div>
                    <div class="modal-body">
                        <form class="mt-0">
                            <div class="form-group">
                                <div class="mb-3 input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                            <polyline points="3 7 12 13 21 7"></polyline>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="학교명" aria-label="school_name">
                                </div>
                            </div>



                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="mt-2 mb-2 btn btn-light-danger btn-no-effect"
                            data-bs-dismiss="modal">취소</button>
                        <button type="submit" class="mt-2 mb-2 btn btn-primary btn-no-effect" data-bs-dismiss="modal">학교 찾기
                            i</button>
                    </div>
                </div>
            </div>
        </div>
    </x-authentication-card>



</x-guest-layout>

