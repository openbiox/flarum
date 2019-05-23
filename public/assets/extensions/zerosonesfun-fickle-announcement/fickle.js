function loadFickle() {
function insertAfter(el, referenceNode) {
 referenceNode.parentNode.insertBefore(el, referenceNode.nextSibling);
}

var newEl = document.createElement('div');
newEl.innerHTML = '<p class="fickle"></p>';

var ref = document.querySelector('div.IndexPage-toolbar');

insertAfter(newEl, ref);
}
window.onload = setTimeout(loadFickle, 3000);
