<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_279955095b0c236005974bd39fb4e32819531b67eb8b081a61f46ece6bb5b899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb69cd4c69ca8723576889c4da214ef4a25adb007c064db25dee438dd55b78e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb69cd4c69ca8723576889c4da214ef4a25adb007c064db25dee438dd55b78e1->enter($__internal_bb69cd4c69ca8723576889c4da214ef4a25adb007c064db25dee438dd55b78e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ef0df28b72d37f5072592c16ff750c676185919ab302c17b4f25a79df88803c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0df28b72d37f5072592c16ff750c676185919ab302c17b4f25a79df88803c0->enter($__internal_ef0df28b72d37f5072592c16ff750c676185919ab302c17b4f25a79df88803c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_bb69cd4c69ca8723576889c4da214ef4a25adb007c064db25dee438dd55b78e1->leave($__internal_bb69cd4c69ca8723576889c4da214ef4a25adb007c064db25dee438dd55b78e1_prof);

        
        $__internal_ef0df28b72d37f5072592c16ff750c676185919ab302c17b4f25a79df88803c0->leave($__internal_ef0df28b72d37f5072592c16ff750c676185919ab302c17b4f25a79df88803c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
