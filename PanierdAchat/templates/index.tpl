<div>
    <p style="background-color:
        {if isset($sexe === 'F')}
            pink
        {else}
            blue
        {/if}" >

            {if isset($name)}
                Hello {$name}
            {else}
                Hello Nobody
            {/if}

    </p>
</div>