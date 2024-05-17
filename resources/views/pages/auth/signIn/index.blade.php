@extends('layouts.auth.index')

@section('content')
    <div class="flex h-full min-h-screen w-full items-center bg-gray-50 p-6 dark:bg-gray-900">
        <div class="mx-auto max-w-4xl flex-1 overflow-hidden rounded-lg bg-white shadow-xl dark:bg-gray-800">
            <main class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img
                        aria-hidden="true"
                        class="h-full w-full object-cover dark:hidden"
                        src="{{ asset('images/stocks/login-office.jpeg') }}"
                        alt="Office" />
                    <img
                        aria-hidden="true"
                        class="hidden h-full w-full object-cover dark:block"
                        src="{{ asset('images/stocks/login-office-dark.jpeg') }}"
                        alt="Office" />
                </div>

                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <form
                        class="w-full"
                        method="POST"
                        action="{{ route('signIn.post') }}">
                        <h1 class="mb-4 text-2xl font-semibold text-gray-700 dark:text-gray-200">Sign In</h1>

                        @csrf

                        <label class="form-control mb-2 w-full">
                            <div class="label">
                                <span class="label-text">Email</span>
                            </div>
                            <input
                                type="text"
                                name="username"
                                placeholder="Type email here . . ."
                                class="input input-bordered w-full" />
                        </label>

                        <label class="form-control mb-2 w-full">
                            <div class="label">
                                <span class="label-text">Password</span>
                            </div>
                            <input
                                type="password"
                                name="password"
                                placeholder="*************"
                                class="input input-bordered w-full" />
                        </label>

                        <button
                            type="submit"
                            class="btn btn-primary mt-4 w-full">
                            Submit
                        </button>

                        <p class="mt-4">
                            <a
                                class="text-primary text-sm font-medium hover:underline"
                                href="">
                                Forgot your password?
                            </a>
                        </p>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
