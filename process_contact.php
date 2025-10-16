<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar e sanitizar dados
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validações
    $errors = [];
    
    if (empty($name) || strlen($name) < 2) {
        $errors[] = "Nome deve ter pelo menos 2 caracteres";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "E-mail válido é obrigatório";
    }
    
    if (empty($service)) {
        $errors[] = "Selecione um serviço";
    }
    
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Mensagem deve ter pelo menos 10 caracteres";
    }
    
    // Processar se não há erros
    if (empty($errors)) {
        // Preparar dados para salvar
        $contact_data = [
            'date' => date('d/m/Y H:i:s'),
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'service' => $service,
            'message' => $message,
            'ip' => $_SERVER['REMOTE_ADDR']
        ];
        
        // Salvar em arquivo (em produção, usar banco de dados)
        $log_entry = "=== NOVO CONTATO RAMIREZ STUDIO ===\n";
        $log_entry .= "Data: " . $contact_data['date'] . "\n";
        $log_entry .= "Nome: " . $contact_data['name'] . "\n";
        $log_entry .= "E-mail: " . $contact_data['email'] . "\n";
        $log_entry .= "Telefone: " . $contact_data['phone'] . "\n";
        $log_entry .= "Serviço: " . $contact_data['service'] . "\n";
        $log_entry .= "Mensagem: " . $contact_data['message'] . "\n";
        $log_entry .= "IP: " . $contact_data['ip'] . "\n";
        $log_entry .= "================================\n\n";
        
        file_put_contents('contacts_ramirez.log', $log_entry, FILE_APPEND | LOCK_EX);
        
        // Aqui você pode adicionar:
        // - Envio de e-mail para contato@ramirezstudio.com.br
        // - Integração com CRM
        // - Notificação no WhatsApp da empresa
        
        // Redirecionar com sucesso
        header('Location: index.php?success=1#contact');
        exit;
    } else {
        // Redirecionar com erro
        header('Location: index.php?error=1#contact');
        exit;
    }
} else {
    // Método não permitido
    header('Location: index.php');
    exit;
}
?>