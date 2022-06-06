window.addEventListener('success', event => {
    console.log(event);
    Toastify({
        text: event.detail.message,
        duration: 2000,
        newWindow: true,
        // avatar:'https://freepngimg.com/thumb/success/6-2-success-png-image.png',
        close: true,
        gravity: "right", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            // background: "linear-gradient(to right, #00b09b, #96c93d)",
            background: "#00a728",
            color: "#fff",
            border:'2px solid #fff',
            borderRadius: "15px",
            padding: "10px 15px",
        },
        onClick: function(){} // Callback after click
    }).showToast();
});

window.addEventListener('error', event => {
    console.log(event);
    Toastify({
        text: event.detail.message,
        duration: 2000,
        newWindow: true,
        close: true,
        gravity: "right", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            // background: "linear-gradient(to right, #00b09b, #96c93d)",
            background: "#ea3321",
            color: "#fff",
            border:'2px solid #fff',
            borderRadius: "15px",
            padding: "10px 15px",
        },
        onClick: function(){} // Callback after click
    }).showToast();
});
window.addEventListener('warning', event => {
    Toastify({
        text: event.detail.message,
        duration: 2000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            // background: "linear-gradient(to right, #00b09b, #96c93d)",
            background: "#ffec00",
            color: "#000",
            border:'2px solid #fff',
            borderRadius: "15px",
            padding: "10px 15px",
        },
        onClick: function(){} // Callback after click
    }).showToast();
});

// Toast
window.addEventListener('delete-item', event => {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('deleteConfirm');
        }
    })
})
