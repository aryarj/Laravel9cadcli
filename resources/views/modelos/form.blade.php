@csrf
    <input type="text" name="name" required placeholder="Nome:" value="{{$cliente->name ?? old('name')}}">
    <input type="email" name="email" required placeholder="E-mail:" value="{{$cliente->email ?? old('email')}}">
    <input type="text" name="cpf" required maxlength="11" minlength="11" placeholder="cpf:" value="{{$cliente->cpf ?? old('cpf')}}">
    <button type="submit">Enviar</button>