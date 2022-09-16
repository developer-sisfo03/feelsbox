document.body.className ='fade'
document.body.classList.add('fade')
document.addEventListener('DOMContentLoaded', () => {
    window.setTimeout( () => {
        document.body.classList.remove('fade')
    },230)
})