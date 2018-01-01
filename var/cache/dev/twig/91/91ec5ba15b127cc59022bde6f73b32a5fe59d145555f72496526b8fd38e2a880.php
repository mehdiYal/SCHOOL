<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8651f0a20a4d198737a8c0ed2e5a911c995309d32ca80e9c562df401acbf450e extends Twig_Template
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
        $__internal_46c32b4b117df9c85527c48c905095fbe9d3102351b7f6ca7b81460d8d754d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c32b4b117df9c85527c48c905095fbe9d3102351b7f6ca7b81460d8d754d94->enter($__internal_46c32b4b117df9c85527c48c905095fbe9d3102351b7f6ca7b81460d8d754d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ad2824d7610a6de38b713de69bbbb7e909fdff8953a4f1439777ad9ad8d964fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2824d7610a6de38b713de69bbbb7e909fdff8953a4f1439777ad9ad8d964fa->enter($__internal_ad2824d7610a6de38b713de69bbbb7e909fdff8953a4f1439777ad9ad8d964fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_46c32b4b117df9c85527c48c905095fbe9d3102351b7f6ca7b81460d8d754d94->leave($__internal_46c32b4b117df9c85527c48c905095fbe9d3102351b7f6ca7b81460d8d754d94_prof);

        
        $__internal_ad2824d7610a6de38b713de69bbbb7e909fdff8953a4f1439777ad9ad8d964fa->leave($__internal_ad2824d7610a6de38b713de69bbbb7e909fdff8953a4f1439777ad9ad8d964fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
