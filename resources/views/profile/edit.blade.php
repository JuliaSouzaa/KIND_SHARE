<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="../editarperfil.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

@include('components.nav')

    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Perfil') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Seção de Atualização de Informações -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Atualizar Informações</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Seção de Atualização de Senha -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Atualizar Senha</h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Seção de Deletar Usuário -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Deletar Conta</h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

</body>
</html>