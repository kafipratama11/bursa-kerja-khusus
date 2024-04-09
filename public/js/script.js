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