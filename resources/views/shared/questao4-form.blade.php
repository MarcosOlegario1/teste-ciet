<form method="POST" action=" {{ route('fileCreation.Form') }}">
    @csrf
    <div>
        <div>
            <div>
                <p style="color: white">Nome</p>
                <textarea name="name" id="name" cols="30" rows="1"></textarea>
            </div>
            <div>
                <p style="color: white">Sobrenome</p>
                <textarea name="lastName" id="lastName" cols="30" rows="1"></textarea>    
            </div>

        </div>
        <div>
            <div>
                <p style="color: white">Email</p>
                <textarea name="email" id="email" cols="30" rows="1"></textarea>
            </div>

            <div>
                <p style="color: white">Telefone</p>
                <textarea name="phone" id="phone" cols="30" rows="1"></textarea>    
            </div>

        </div>
        <div>
            <div>
                <p style="color: white">Login</p>
                <textarea name="login" id="login" cols="30" rows="1"></textarea>
            </div>

            <div>
                <p style="color: white">Senha</p>
                <textarea name="password" id="password" cols="30" rows="1"></textarea>
            </div>
        </div>
        <div>
            <button type="submit" style="background-color: whitesmoke; width:5rem; margin-top:1rem">Enviar</button>
        </div> 
    </div>
    
</form>