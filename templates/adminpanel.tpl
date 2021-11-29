{include file="header.tpl"}

<body>

    {foreach from=$users item=user}
        

        <ul class="container list-group">
            
            <li class="list-group-item">
                {if $user['admin'] eq 1}<span class="text-success">ADMIN</span>{/if}  Email:{$user['email']}<a href="deleteUser/{$user['id_usuario']}"><i class="bi bi-x-circle-fill text-danger fs-5" title="Eliminar usuario"></i></a>{if $user['admin'] eq 0}<a href="promoteUser/{$user['id_usuario']}"><i class="bi bi-shield-fill-plus text-success fs-3" title="Dar derechos de administración"></i></a>{/if}{if $user['admin'] eq 1}<a href="demoteUser/{$user['id_usuario']}"><i class="bi bi-shield-fill-minus text-danger fs-3" title="Revocar derechos de administración"></i></a>{/if}
            </li>
  
        </ul>


    {/foreach}

 {include file="footer.tpl"}