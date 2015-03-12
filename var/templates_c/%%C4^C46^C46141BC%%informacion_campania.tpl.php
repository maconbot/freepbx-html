<?php /* Smarty version 2.6.14, created on 2015-02-18 21:56:52
         compiled from file:/var/www/html/modules/campaign_monitoring/themes/default/informacion_campania.tpl */ ?>
<div
    id="elastix-callcenter-error-message"
    class="ui-state-error ui-corner-all">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        <span id="elastix-callcenter-error-message-text"></span>
    </p>
</div>
<div id="campaignMonitoringApplication">
<script type="text/x-handlebars" data-template-name="campaign">

<b><?php echo $this->_tpl_vars['ETIQUETA_CAMPANIA']; ?>
:</b>
<?php echo '
{{view Ember.Select
            contentBinding="content"
            optionValuePath="content.key_campaign"
            optionLabelPath="content.desc_campaign"
            valueBinding="key_campaign" }}
'; ?>


<?php echo '{{outlet}}'; ?>


</script>


<script type="text/x-handlebars" data-template-name="campaign/details">
<table width="100%" >
    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_FECHA_INICIO']; ?>
:</b></td>
        <td><?php echo '{{fechaInicio}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_FECHA_FINAL']; ?>
:</b></td>
        <td><?php echo '{{fechaFinal}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_HORARIO']; ?>
:</b></td>
        <td><?php echo '{{horaInicio}} - {{horaFinal}}'; ?>
</td>
    </tr>
    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_COLA']; ?>
:</b></td>
        <td><?php echo '{{cola}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_INTENTOS']; ?>
:</b></td>
        <td><?php echo '{{maxIntentos}}'; ?>
</td>
        <td></td>
        <td>&nbsp;</td>
    </tr>
</table>

<table width="100%" >
    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_TOTAL_LLAMADAS']; ?>
:</b></td>
        <td><?php echo '{{llamadas.total}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_COLA']; ?>
:</b></td>
        <td><?php echo '{{llamadas.encola}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_EXITO']; ?>
:</b></td>
        <td><?php echo '{{llamadas.conectadas}}'; ?>
</td>
    </tr>
    <?php echo '{{#if outgoing }}'; ?>

    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_PENDIENTES']; ?>
:</b></td>
        <td><?php echo '{{llamadas.pendientes}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_MARCANDO']; ?>
:</b></td>
        <td><?php echo '{{llamadas.marcando}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_TIMBRANDO']; ?>
:</b></td>
        <td><?php echo '{{llamadas.timbrando}}'; ?>
</td>
    </tr>
    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_FALLIDAS']; ?>
:</b></td>
        <td><?php echo '{{llamadas.fallidas}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_NOCONTESTA']; ?>
:</b></td>
        <td><?php echo '{{llamadas.nocontesta}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_ABANDONADAS']; ?>
:</b></td>
        <td><?php echo '{{llamadas.abandonadas}}'; ?>
</td>
    </tr>
    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_CORTAS']; ?>
:</b></td>
        <td><?php echo '{{llamadas.cortas}}'; ?>
</td>
        <td colspan="4">&nbsp;</td>
    </tr>
    <?php echo '{{else}}'; ?>

    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_SINRASTRO']; ?>
:</b></td>
        <td><?php echo '{{llamadas.sinrastro}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_ABANDONADAS']; ?>
:</b></td>
        <td><?php echo '{{llamadas.abandonadas}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_TERMINADAS']; ?>
:</b></td>
        <td><?php echo '{{llamadas.terminadas}}'; ?>
</td>
    </tr>
    <?php echo '{{/if}}'; ?>

    <tr>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_PROMEDIO_DURAC_LLAM']; ?>
:</b></td>
        <td><?php echo '{{llamadas.fmtpromedio}}'; ?>
</td>
        <td><b><?php echo $this->_tpl_vars['ETIQUETA_MAX_DURAC_LLAM']; ?>
:</b></td>
        <td><?php echo '{{llamadas.fmtmaxduration}}'; ?>
</td>
    </tr>
</table>

<table width="100%" ><tr>
    <td width="50%" style="vertical-align: top;">
        <b><?php echo $this->_tpl_vars['ETIQUETA_LLAMADAS_MARCANDO']; ?>
:</b>
        <table class="titulo">
            <tr>
                <td width="20%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_ESTADO']; ?>
</td>
                <td width="30%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_NUMERO_TELEFONO']; ?>
</td>
                <td width="30%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_TRONCAL']; ?>
</td>
                <td width="20%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_DESDE']; ?>
</td>
            </tr>
        </table>
        <div class="llamadas" <?php echo '{{bindAttr style="alturaLlamada"}}'; ?>
>
            <table>
                <?php echo '{{#view tagName="tbody"}}
                {{#each llamadasMarcando}}
                <tr {{bindAttr class="reciente"}}>
                    <td width="20%" nowrap="nowrap">{{estado}}</td>
                    <td width="30%" nowrap="nowrap">{{numero}}</td>
                    <td width="30%" nowrap="nowrap">{{troncal}}</td>
                    <td width="20%" nowrap="nowrap">{{desde}}</td>
                </tr>
                {{/each}}
                {{/view}}'; ?>

            </table>
        </div>
    </td>
    <td width="50%" style="vertical-align: top;">
        <b><?php echo $this->_tpl_vars['ETIQUETA_AGENTES']; ?>
:</b>
        <table class="titulo">
            <tr>
                <td width="20%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_AGENTE']; ?>
</td>
                <td width="14%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_ESTADO']; ?>
</td>
                <td width="23%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_NUMERO_TELEFONO']; ?>
</td>
                <td width="23%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_TRONCAL']; ?>
</td>
                <td width="20%" nowrap="nowrap"><?php echo $this->_tpl_vars['ETIQUETA_DESDE']; ?>
</td>
            </tr>
        </table>
        <div class="llamadas" <?php echo '{{bindAttr style="alturaLlamada"}}'; ?>
>
            <table>
                <?php echo '{{#view tagName="tbody"}}
                {{#each agentes}}
                <tr {{bindAttr class="reciente"}}>
                    <td width="20%" nowrap="nowrap">{{canal}}</td>
                    <td width="14%" nowrap="nowrap">{{estado}}</td>
                    <td width="23%" nowrap="nowrap">{{numero}}</td>
                    <td width="23%" nowrap="nowrap">{{troncal}}</td>
                    <td width="20%" nowrap="nowrap">{{desde}}</td>
                </tr>
                {{/each}}
                {{/view}}'; ?>

            </table>
        </div>
    </td>
</tr></table>

<?php echo '{{view Ember.Checkbox checkedBinding="registroVisible"}}'; ?>

<b><?php echo $this->_tpl_vars['ETIQUETA_REGISTRO']; ?>
: </b><br/>
<?php echo '{{#if registroVisible}}
<button class="button" {{action "cargarprevios" }}>';  echo $this->_tpl_vars['PREVIOUS_N'];  echo '</button>
{{#view App.RegistroView class="registro" }}
<table>
    {{#each registro}}
    <tr>
        <td>{{timestamp}}</td>
        <td>{{mensaje}}</td>
    </tr>
    {{/each}}
</table>
{{/view}}
{{/if}}'; ?>

</script>
</div>