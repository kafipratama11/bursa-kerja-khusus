const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
        toastBootstrap.show()
    })
}
document.addEventListener('DOMContentLoaded', function() {
    var textToCopy = document.getElementById('text-to-copy');
    var copyFeedback = document.getElementById('copy-feedback');
    var copyLink = document.getElementById('copy-link');

    copyLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        var selectedText = textToCopy.innerText.trim();
        copyToClipboard(selectedText);
    });

    function copyToClipboard(text) {
        var textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);

        showCopyFeedback();
        changeIcon();
    }

    function showCopyFeedback() {
        copyFeedback.style.display = 'block';
        setTimeout(function() {
            copyFeedback.style.display = 'none';
        }, 2000);
    }

    function changeIcon() {
        var icon = document.querySelector('#copy-link i');
        icon.classList.remove('bi-clipboard');
        icon.classList.add('bi-check');

        setTimeout(function() {
            icon.classList.remove('bi-check');
            icon.classList.add('bi-clipboard');
        }, 2000);
    }
});
document.addEventListener('DOMContentLoaded', function() {
    var textToCopy = document.getElementById('text-to-copy-email');
    var copyFeedback = document.getElementById('copy-feedback-email');
    var copyLink = document.getElementById('copy-link-email');

    copyLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        var selectedText = textToCopy.innerText.trim();
        copyToClipboard(selectedText);
    });

    function copyToClipboard(text) {
        var textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);

        showCopyFeedback();
        changeIcon();
    }

    function showCopyFeedback() {
        copyFeedback.style.display = 'block';
        setTimeout(function() {
            copyFeedback.style.display = 'none';
        }, 2000);
    }

    function changeIcon() {
        var icon = document.querySelector('#copy-link-email i ');
        icon.classList.remove('bi-clipboard');
        icon.classList.add('bi-check');

        setTimeout(function() {
            icon.classList.remove('bi-check');
            icon.classList.add('bi-clipboard');
        }, 2000);
    }
});

function capitalizeWords(sentence) {
    var words = sentence.toLowerCase().split(' ');
    for (var i = 0; i < words.length; i++) {
        var word = words[i];
        words[i] = word.charAt(0).toUpperCase() + word.slice(1);
    }
    return words.join(' ');
}

// Ambil teks dari div dengan id "myText"
var divText = document.getElementById("myText").innerText;
// Ubah teks tersebut menjadi huruf kapital di awal setiap kata
var capitalizedText = capitalizeWords(divText);
// Masukkan kembali teks yang sudah diubah ke dalam div
document.getElementById("myText").innerText = capitalizedText;
