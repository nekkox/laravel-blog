@if(session()->has(['success']))
    <div
        x-data="{ showPopup: true}"
        x-init="setTimeout(() => showPopup = false , 3000)"
        x-show = "showPopup">
        <p class="fixed bottom-3 right-3 bg-blue-500 text-white px-2 py-2 rounded-xl">
            {{session()->get('success')}}
        </p>
    </div>
@endif
