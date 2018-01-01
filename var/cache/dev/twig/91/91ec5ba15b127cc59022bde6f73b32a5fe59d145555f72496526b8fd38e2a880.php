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
        $__internal_80b8713e881c2f58d414bbf7268699e5b39b2a6a09dcfa2c95bc4282f5362eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b8713e881c2f58d414bbf7268699e5b39b2a6a09dcfa2c95bc4282f5362eb6->enter($__internal_80b8713e881c2f58d414bbf7268699e5b39b2a6a09dcfa2c95bc4282f5362eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fff255e604faf058391bfd4f4d8875314915d7f7fe7bccda90832582ef9da87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff255e604faf058391bfd4f4d8875314915d7f7fe7bccda90832582ef9da87c->enter($__internal_fff255e604faf058391bfd4f4d8875314915d7f7fe7bccda90832582ef9da87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_80b8713e881c2f58d414bbf7268699e5b39b2a6a09dcfa2c95bc4282f5362eb6->leave($__internal_80b8713e881c2f58d414bbf7268699e5b39b2a6a09dcfa2c95bc4282f5362eb6_prof);

        
        $__internal_fff255e604faf058391bfd4f4d8875314915d7f7fe7bccda90832582ef9da87c->leave($__internal_fff255e604faf058391bfd4f4d8875314915d7f7fe7bccda90832582ef9da87c_prof);

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
