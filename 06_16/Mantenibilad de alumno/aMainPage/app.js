const saveBtn = document.querySelector('#saveAlumno')
const delBtn = document.querySelector('#deleteAlumno')
const closeBtn = document.querySelector('.close-btn')
const sendBtn = document.querySelector('#send-btn')

const studentInput = document.querySelector('#form-container')

saveBtn.addEventListener('click', () => studentInput.classList.remove('hidden'))

closeBtn.addEventListener('click', () => studentInput.classList.add('hidden'))
sendBtn.addEventListener('click', () => studentInput.classList.add('hidden'))