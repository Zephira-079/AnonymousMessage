window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search)
    const params = Object.fromEntries(urlParams.entries())

    function showToast(message, type) {
        const toastContainer = document.getElementById('toast-container')
        if (!toastContainer) return

        const toast = document.createElement('div')
        toast.classList.add('toast')
        toast.textContent = message
        // toast.classList.add(type)
        toastContainer.appendChild(toast)
        toast.classList.add('show')
        setTimeout(function () {
            toast.classList.remove('show')
            setTimeout(function () {
                toastContainer.removeChild(toast)
            }, 300)
        }, 3000)
    }
    
    for(key in params){
        showToast(key)   
    }
}
