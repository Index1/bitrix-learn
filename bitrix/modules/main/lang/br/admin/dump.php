<?
$MESS["MAIN_DUMP_FILE_CNT"] = "Arquivos compactados:";
$MESS["MAIN_DUMP_FILE_SIZE"] = "Tamanho dos arquivos:";
$MESS["MAIN_DUMP_FILE_FINISH"] = "Backup finalizado";
$MESS["MAIN_DUMP_FILE_MAX_SIZE"] = "Não incluir arquivos nos quais o tamanho excede (0 - sem limite):  ";
$MESS["MAIN_DUMP_FILE_STEP_SLEEP"] = "intervalo:";
$MESS["MAIN_DUMP_FILE_STEP_sec"] = "seg(s)";
$MESS["MAIN_DUMP_FILE_MAX_SIZE_b"] = "B";
$MESS["MAIN_DUMP_FILE_MAX_SIZE_kb"] = "kB";
$MESS["MAIN_DUMP_FILE_MAX_SIZE_mb"] = "MB";
$MESS["MAIN_DUMP_FILE_MAX_SIZE_gb"] = "GB";
$MESS["MAIN_DUMP_FILE_DUMP_BUTTON"] = "Iniciar Backup";
$MESS["MAIN_DUMP_FILE_STOP_BUTTON"] = "Parar";
$MESS["MAIN_DUMP_FILE_KERNEL"] = "Arquivos de backup do kernel:";
$MESS["MAIN_DUMP_FILE_NAME"] = "Nome do Arquivo";
$MESS["FILE_SIZE"] = "Tamanho do arquivo";
$MESS["MAIN_DUMP_FILE_TIMESTAMP"] = "Modificado";
$MESS["MAIN_DUMP_FILE_PUBLIC"] = "Backup dos arquivos públicos:";
$MESS["MAIN_DUMP_BASE_STAT"] = "estatísticas";
$MESS["MAIN_DUMP_BASE_SINDEX"] = "ndice de pesquisa";
$MESS["MAIN_DUMP_BASE_SIZE"] = "Mb";
$MESS["MAIN_DUMP_PAGE_TITLE"] = "Backup";
$MESS["MAIN_DUMP_LIST_PAGE_TITLE"] = "Back-ups";
$MESS["MAIN_DUMP_AUTO_PAGE_TITLE"] = "Criar Backup Automático";
$MESS["MAIN_DUMP_AUTO_BUTTON"] = "Backup Automático";
$MESS["MAIN_DUMP_SITE_PROC"] = "Compactando...";
$MESS["MAIN_DUMP_ARC_SIZE"] = "Tamanho do arquivo:";
$MESS["MAIN_DUMP_TABLE_FINISH"] = "Tabelas processadas:";
$MESS["MAIN_DUMP_ACTION_DOWNLOAD"] = "Download";
$MESS["MAIN_DUMP_DELETE"] = "Excluir";
$MESS["MAIN_DUMP_ALERT_DELETE"] = "Tem certeza de que deseja excluir este arquivo?";
$MESS["MAIN_DUMP_FILE_PAGES"] = "Cópias de backup";
$MESS["MAIN_RIGHT_CONFIRM_EXECUTE"] = "Atenção! Descompactar a cópia backup no site corrente pode corromper o site. Deseja continuar?";
$MESS["MAIN_DUMP_RESTORE"] = "Descompactar";
$MESS["MAIN_DUMP_MYSQL_ONLY"] = "O recurso de backup suporta apenas bancos MySQL. <br> Por favor, use uma ferramenta externa realizar o backup.";
$MESS["MAIN_DUMP_HEADER_MSG1"] = "Para mover um arquivo de backup do site para um outro servidor, copie o script de restauração <a href='#EXPORT#'>restore.php</a> e o arquivo para a raiz de documentos do novo servidor. Então digite em seu navegador: <b>&lt;site name&gt;/restore.php</b>.";
$MESS["MAIN_DUMP_SKIP_SYMLINKS"] = "Ignorar links simbólicos para diretórios";
$MESS["MAIN_DUMP_MASK"] = "Excluir arquivos e pastas (máscara):";
$MESS["MAIN_DUMP_MORE"] = "Mais...";
$MESS["MAIN_DUMP_FOOTER_MASK"] = "As seguintes regras se aplicam as máscaras de exclusão:
 <p>
 <li>A máscara pode conter asteríscos &quot;*&quot; que correspondem a qualquer ou nenhum caracter no arquivo ou no nome da pasta;</li>
 <li>se o caminho começa com uma barra ou uma contrabarra (&quot;/&quot; or &quot;\\&quot;), o caminho é relativo a raiz do site;</li>
 <li>todo caso,a máscara é aplicada para cada arquivo e cada pasta;</li>
 <p>Exemplos de modelos:</p>
 <li>/content/photo - exclui a pasta/content/photo;</li>
 <li>*.zip - exclui os arquivos ZIP(Aqueles que possuem a extensão &quot;zip&quot;);</li>
 <li>.access.php - exclui todos os arquivos &quot;.access.php&quot;;</li>
 <li>/files/download/*.zip - exclui os arquivos ZIP em/files/download;</li>
 <li>/files/d*/*.ht* - exclui arquivos com extensões que começam com &quot;ht&quot; em diretórios que começam com &quot;/files/d&quot;.</li>";
$MESS["MAIN_DUMP_ERROR"] = "Erro";
$MESS["ERR_EMPTY_RESPONSE"] = "O servidor retornou uma resposta vazia. Entre em contato com sua empresa de hospedagem para revisão do registro para a data: #DATA#";
$MESS["DUMP_NO_PERMS"] = "Permissão do servidor insuficiente para criar arquivos de backup.";
$MESS["DUMP_NO_PERMS_READ"] = "Erro ao abrir o arquivo de backup para a leitura.";
$MESS["DUMP_DB_CREATE"] = "Criação de banco de dados de despejo";
$MESS["DUMP_CUR_PATH"] = "Caminho atual:";
$MESS["INTEGRITY_CHECK"] = "Verificação de integridade";
$MESS["CURRENT_POS"] = "Progresso:";
$MESS["STEP_LIMIT"] = "Duração da Etapa:";
$MESS["DISABLE_GZIP"] = "Desativar compactação (reduz a carga da CPU):";
$MESS["INTEGRITY_CHECK_OPTION"] = "Verificar a integridade do backup quando concluído:";
$MESS["MAIN_DUMP_DB_PROC"] = "Compactando o dump do banco de dados";
$MESS["TIME_SPENT"] = "Tempo gasto:";
$MESS["TIME_H"] = "h";
$MESS["TIME_M"] = "m";
$MESS["TIME_S"] = "s";
$MESS["MAIN_DUMP_FOLDER_ERR"] = "A pasta #FOLDER# não tem permissões de gravação.";
$MESS["MAIN_DUMP_NO_CLOUDS_MODULE"] = "O módulo de armazenamento em nuvem não está instalado.";
$MESS["MAIN_DUMP_INT_CLOUD_ERR"] = "Erro ao inicializar o armazenamento em nuvem. Por favor, tente novamente mais tarde. \"";
$MESS["MAIN_DUMP_ERR_FILE_SEND"] = "Não é possível carregar arquivo para armazenamento em nuvem:";
$MESS["MAIN_DUMP_ERR_OPEN_FILE"] = "Não é possível abrir arquivo para leitura:";
$MESS["MAIN_DUMP_SUCCESS_SENT"] = "Arquivo foi enviado para armazenamento em nuvem com sucesso.";
$MESS["MAIN_DUMP_SUCCESS_SAVED"] = "As modificações foram salvas.";
$MESS["MAIN_DUMP_SUCCESS_SAVED_DETAILS"] = "O Backup Automático será ativado após a configuração do cron. ";
$MESS["MAIN_DUMP_AUTO_NOTE"] = "Utilize o painel de controle de hospedagem para adicionar as seguintes tarefas ao cron:  <b>#SCRIPT#</b>. Programação recomendada: semanal. ";
$MESS["MAIN_DUMP_CLOUDS_DOWNLOAD"] = "Baixar arquivos de armazenamento em nuvem";
$MESS["MAIN_DUMP_FILES_DOWNLOADED"] = "Arquivos enviados";
$MESS["MAIN_DUMP_FILES_SIZE"] = "Total de uploads";
$MESS["MAIN_DUMP_DOWN_ERR_CNT"] = "Arquivos ignorados";
$MESS["MAIN_DUMP_FILE_SENDING"] = "Enviando arquivo para armazenamento em nuvem";
$MESS["MAIN_DUMP_USE_THIS_LINK"] = "Usar este link ao mover o arquivo para outro servidor usando";
$MESS["MAIN_DUMP_ERR_COPY_FILE"] = "Não é possível copiar arquivo:  ";
$MESS["MAIN_DUMP_ERR_INIT_CLOUD"] = "Não é possível conectar ao armazenamento em nuvem";
$MESS["MAIN_DUMP_ERR_FILE_RENAME"] = "Erro ao renomear arquivo:";
$MESS["MAIN_DUMP_ERR_NAME"] = "O nome do arquivo pode incluir apenas caracteres latinos, dígitos, hífens e pontos.";
$MESS["MAIN_DUMP_FILE_SIZE1"] = "Tamanho do arquivo";
$MESS["MAIN_DUMP_LOCATION"] = "Localização";
$MESS["MAIN_DUMP_PARTS"] = "partes:";
$MESS["MAIN_DUMP_LOCAL"] = "armazenamento local";
$MESS["MAIN_DUMP_GET_LINK"] = "Obter link";
$MESS["MAIN_DUMP_SEND_CLOUD"] = "Enviar para armazenamento em nuvem";
$MESS["MAIN_DUMP_SEND_FILE_CLOUD"] = "Enviar o arquivo para armazenamento em nuvem";
$MESS["MAIN_DUMP_RENAME"] = "Renomear";
$MESS["MAIN_DUMP_ARC_NAME_W_O_EXT"] = "Nome do arquivo sem extensão";
$MESS["MAIN_DUMP_ARC_NAME"] = "Nome do arquivo";
$MESS["MAIN_DUMP_ARC_LOCATION"] = "Localização do arquivo:  ";
$MESS["MAIN_DUMP_LOCAL_DISK"] = "disco local";
$MESS["MAIN_DUMP_EVENT_LOG"] = "Registro de evento";
$MESS["MAIN_DUMP_ENC_PASS_DESC"] = "Senha do arquivo deve incluir pelo menos 6 caracteres.";
$MESS["MAIN_DUMP_EMPTY_PASS"] = "Senha do arquivo não foi especificada.";
$MESS["MAIN_DUMP_NOT_INSTALLED"] = "Mcrypt para PHP não está instalado.";
$MESS["MAIN_DUMP_NO_ENC_FUNCTIONS"] = "Criptografia está indisponível. Entre em contato com o administrador de sistemas.";
$MESS["MAIN_DUMP_ENABLE_ENC"] = "Criptografar arquivo de backup";
$MESS["MAIN_DUMP_ENC_PASS"] = "Senha do arquivo (pelo menos 6 caracteres):";
$MESS["MAIN_DUMP_SAVE_PASS"] = "Por favor, mantenha sua senha em segurança. Você não será capaz de extrair o conteúdo de um arquivo se você perder sua senha";
$MESS["MAIN_DUMP_SAVE_PASS_AUTO"] = "A senha que você forneceu será encriptada e salva localmente. Sua chave de licença será utilizada como parâmetro de criptografia. Pedimos que modifique sua senha ao menos uma vez por mês. ";
$MESS["MAIN_DUMP_MAX_ARCHIVE_SIZE"] = "Tamanho do volume do arquivo (MB):";
$MESS["DUMP_MAIN_SESISON_ERROR"] = "Sua sessão expirou. Por favor, recarregue a página.";
$MESS["DUMP_MAIN_ERROR"] = "Erro!";
$MESS["DUMP_MAIN_REGISTERED"] = "Registrado";
$MESS["DUMP_MAIN_EDITION"] = "Edição";
$MESS["DUMP_MAIN_ACTIVE_FROM"] = "Ativo desde";
$MESS["DUMP_MAIN_ACTIVE_TO"] = "Ativo até";
$MESS["DUMP_MAIN_ERR_GET_INFO"] = "Não é possível obter informações importantes a partir do servidor de atualização.";
$MESS["DUMP_MAIN_BITRIX_CLOUD"] = "Bitrix Nuvens";
$MESS["DUMP_MAIN_BITRIX_CLOUD_DESC"] = "Bitrix Cloud Storage";
$MESS["DUMP_MAIN_ERR_PASS_CONFIRM"] = "As senhas digitadas não correspondem.";
$MESS["DUMP_MAIN_PASSWORD_CONFIRM"] = "Repita a senha:";
$MESS["DUMP_MAIN_MAKE_ARC"] = "Backup";
$MESS["MAKE_DUMP_FULL"] = "Criar cópia completa de segurança";
$MESS["DUMP_MAIN_PARAMETERS"] = "Parâmetros";
$MESS["DUMP_MAIN_EXPERT_SETTINGS"] = "Configurações Avançadas";
$MESS["DUMP_MAIN_ENC_ARC"] = "Criptografar arquivo";
$MESS["DUMP_MAIN_SITE"] = "Website:";
$MESS["DUMP_MAIN_IN_THE_CLOUD"] = "na nuvem:";
$MESS["DUMP_MAIN_IN_THE_BXCLOUD"] = "na nuvem Bitrix";
$MESS["DUMP_MAIN_ENABLE_EXPERT"] = "Ativar configurações avançadas de backup";
$MESS["DUMP_MAIN_CHANGE_SETTINGS"] = "Modificar os parâmetros avançados podem produzir um arquivo incompleto ou danificado impedindo assim recuperação posterior. Você deve ter uma completa compreensão do efeito que cada um dos parâmetros terá no resultado.";
$MESS["DUMP_MAIN_ARC_CONTENTS"] = "Conteúdo do backup";
$MESS["DUMP_MAIN_DOWNLOAD_CLOUDS"] = "Fazer download de dados de nuvens e adicioná-lo ao backup:";
$MESS["DUMP_MAIN_ARC_DATABASE"] = "Adicionar banco de dados para backup";
$MESS["DUMP_MAIN_DB_EXCLUDE"] = "Excluir da base de dados:";
$MESS["DUMP_MAIN_ARC_MODE"] = "Modo do arquivo";
$MESS["DUMP_MAIN_MULTISITE"] = "Se o seu sistema tem múltiplos sites com diferentes caminhos para diretório raiz do servidor web, tais sites terão o backup realizado e restaurado individualmente. Este é um caso especial: um arquivo completo é criado apenas uma vez, para um dos sites; ao fazer backup de outro sites, você terá que excluir o kernel e o banco de dados usando <b>Configurações Avançadas</b>. Se as cópias de backup irão então serem usadas para restaurar sites em outro servidor web, você terá que criar os links simbólicos para as pastas <b>Bitrix</b> e <b>fazer o upload</b> manualmente.";
$MESS["BCL_BACKUP_USAGE"] = "Espaço usado: #USAGE# de #QUOTA#.";
$MESS["DUMP_BXCLOUD_NA"] = "Bitrix Cloud Storage está indisponível";
$MESS["DUMP_ERR_NON_ASCII"] = "Caracteres nacionais não estão permitidos na senha para evitar problemas de restauração.";
$MESS["DUMP_MAIN_BXCLOUD_INFO"] = "Bitrix Inc. fornece espaço em nuvem para três cópias de backup gratuitos para uma licença ativa. Você vai acessar os backups fornecendo um chave de licença válida e uma senha. Você não será capaz de restaurar um site a partir de um cópia de backup se você perder sua senha.";
$MESS["MAIN_DUMP_BXCLOUD_ENC"] = "A criptografia não pode ser desativada para backups salvos no Bitrix Cloud Storage.";
$MESS["MAIN_DUMP_FROM"] = "a partir de";
$MESS["DUMP_ERR_BIG_BACKUP"] = "Tamanho do backup excede sua cota Nuvem Bitrix. O arquivo foi salvo na máquina local.";
$MESS["DUMP_BACK"] = "Voltar";
$MESS["DUMP_RETRY"] = "Tente novamente";
$MESS["MAIN_DUMP_ERR_DELETE"] = "Você não pode excluir manualmente os arquivos armazenados em Bitrix Cloud. Os arquivos desatualizados serão substituídos por um novo assim que você criar e carregar um novo Backup";
$MESS["ERR_NO_BX_CLOUD"] = "O módulo de suporte de serviço de núvem não está instalado";
$MESS["ERR_NO_CLOUDS"] = "O módulo de armazenamento em nuvem não está instalado.";
$MESS["DUMP_DELETE_ERROR"] = "Não é possível excluir o arquivo #FILE#";
$MESS["DUMP_MAIN_AUTO_PARAMETERS"] = "Parâmetros do Script de Autoexecução";
$MESS["DUMP_MAIN_SAVE"] = "Salvar";
$MESS["DUMP_ADDITIONAL"] = "Parâmetros Adicionais";
$MESS["DUMP_DELETE"] = "Deletar backups locais";
$MESS["DUMP_NOT_DELETE"] = "nunca";
$MESS["DUMP_CLOUD_DELETE"] = "somente se copiado com sucesso para a nuvem";
$MESS["DUMP_RM_BY_TIME"] = "em #TIME# dias desde a criação";
$MESS["DUMP_RM_BY_CNT"] = "somente se houve mais de #CNT# backups";
$MESS["DUMP_RM_BY_SIZE"] = "se o tamanho total exceder #SIZE# GB";
$MESS["MAIN_DUMP_SHED_CLOSEST_TIME"] = "Próxima execução programada para:";
$MESS["MAIN_DUMP_SHED_CLOSEST_TIME_TODAY"] = "A próxima execução está programada para hoje:";
$MESS["MAIN_DUMP_SHED_CLOSEST_TIME_TOMORROW"] = "A próxima execução está programada para amanhã:";
$MESS["MAIN_DUMP_SHED"] = "Programação";
$MESS["MAIN_DUMP_PERIODITY"] = "Executar:";
$MESS["MAIN_DUMP_PER_1"] = "diariamente";
$MESS["MAIN_DUMP_PER_2"] = "em dias alternados";
$MESS["MAIN_DUMP_PER_3"] = "a cada 3 dias";
$MESS["MAIN_DUMP_PER_5"] = "a cada 5 dias";
$MESS["MAIN_DUMP_PER_7"] = "semanalmente";
$MESS["MAIN_DUMP_PER_14"] = "a cada 15 dias ";
$MESS["MAIN_DUMP_PER_21"] = "a cada 3 semanas";
$MESS["MAIN_DUMP_PER_30"] = "mensalmente";
$MESS["MAIN_DUMP_DELETE_OLD"] = "Arquivos Antigos";
$MESS["MAIN_DUMP_SHED_TIME_SET"] = "Esta opção está disponível somente se os agentes do sistema utilizarem o cron. Caso contrário, você terá de utilizar o painel de controle dos seus provedores de hospedagem para ter o script<b>/bitrix/modules/main/tools/backup.php</b> executado quando necessário. ";
$MESS["MAIN_DUMP_AUTO_LOCK"] = "Backup Automático Iniciado";
$MESS["MAIN_DUMP_AUTO_LOCK_TIME"] = "Tempo decorrido desde o início: #TIME#";
$MESS["AUTO_LOCK_EXISTS_ERR"] = "O Backup automático iniciado em #DATETIME# falhou com um erro desconhecido. Por favor, revise os logs do servidor para encontrar a razão do erro. ";
$MESS["AUTO_EXEC_METHOD"] = "Executar:";
$MESS["AUTO_EXEC_FROM_BITRIX"] = "usando serviço de nuvem Bitrix";
$MESS["AUTO_EXEC_FROM_CRON"] = "como agente usando cron";
$MESS["AUTO_EXEC_FROM_MAN"] = "chamando #SCRIPT# diretamente";
$MESS["AUTO_URL"] = "URL do site";
$MESS["DUMP_AUTO_TAB"] = "Autorun";
$MESS["MAIN_DUMP_AUTO_WARN"] = "Habilitar <a href=\"#LINK#\"> backup automático </ a> para ter a cópia mais recente dos seus dados para recuperação.";
$MESS["DUMP_LOCAL_TIME"] = "(Horário do servidor local)";
$MESS["DUMP_CHECK_BITRIXCLOUD"] = "Verifique o status da tarefa atual no <a href=\"#LINK#\"> serviço de nuvem Bitrix</ a>";
$MESS["DUMP_WARN_NO_BITRIXCLOUD"] = "Não é possível ativar o backup automático. Por favor, instale o módulo de suporte de serviços de nuvem ou usar o cron para executar os agentes.";
$MESS["DUMP_SAVED_DISABLED"] = "Backup automático está desativado. <br> Backups só podem ser criados executando /bitrix/modules/main/tools/backup.php manualmente.";
$MESS["DUMP_AUTO_INFO_OFF"] = "Backup automático está desativado";
$MESS["DUMP_AUTO_INFO_ON"] = "Backup automático está habilitado";
$MESS["DUMP_BTN_AUTO_DISABLE"] = "Desativar o backup automático";
$MESS["DUMP_BTN_AUTO_ENABLE"] = "Habilitar backup automático";
$MESS["DUMP_AUTO_INFO_TEXT"] = "<b>Backup automático</b>

Faça com que o recurso de backup automático crie a cópia mais recente de seus dados para você para recuperação em caso de falha de hardware ou software.

Bitrix Cloud Monitor irá criar cópias de segurança ao navegar para uma URL especial em seu site na hora marcada. A URL inclui um ID secreto que permite um visitante a criar a cópia de segurança, mas não acessá-lo. Nenhum acesso ao Painel de Conrol do seu site é necessário e pode ser bloqueado por IP.

Por padrão, a cópia de backup é salva no Bitrix Cloud de forma criptografada em vários locais. Esta é a maneira mais segura de preservar seus dados.

Se os serviços Bitrix Cloud estiverem inacessíveis, mas os agentes estão programados usando cron, a cópia de backup será criada localmente.";
$MESS["MAIN_DUMP_SHED_ENABLE"] = "Executar processos de backup utilizando agentes no tempo especificado";
$MESS["MAIN_DUMP_HEADER_MSG"] = "Para mover o arquivo de backup do site para outro servidor, copie o script de <arestore.php href='#EXPORT#'>restauração</a> e o arquivo para a raiz do documento do novo servidor. Então, digite no seu navegador: <b>&lt;nome do site&gt;/restore.php</b>.";
$MESS["DUMP_MAIN_CONSOLE_INFO"] = "Para automatizar backups, use o painel de controle de seu provedor de hospedagem para adicionar o trabalho cron: <b>php#PATH#</b>. Backups semanais são recomendados.";
?>