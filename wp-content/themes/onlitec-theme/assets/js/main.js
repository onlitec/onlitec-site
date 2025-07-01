const { useState } = React;
function ContatoForm() {
  const [form, setForm] = useState({ nome:'', email:'', msg:'' });
  const handle = e => setForm({...form,[e.target.name]:e.target.value});
  const submit = () => {
    console.log(form);
    alert('Enviado!');
  };
  return (
    <div className="max-w-lg mx-auto">
      <input name="nome" onChange={handle} placeholder="Nome" className="w-full mb-3 p-2 border"/>
      <input name="email" onChange={handle} placeholder="E-mail" className="w-full mb-3 p-2 border"/>
      <textarea name="msg" onChange={handle} placeholder="Mensagem" className="w-full mb-3 p-2 border"/>
      <button onClick={submit} className="px-6 py-2 bg-blue-600 text-white rounded">Enviar</button>
    </div>
  );
}

document.addEventListener('DOMContentLoaded',()=>{
  const root = document.getElementById('contato-root');
  if(root) ReactDOM.render(<ContatoForm/>, root);

  // Mobile menu toggle
  const navToggle = document.getElementById('navToggle');
  const primaryNav = document.getElementById('primaryNav');
  if(navToggle && primaryNav) {
    navToggle.addEventListener('click', ()=>{
      primaryNav.classList.toggle('hidden');
    });
  }
});
