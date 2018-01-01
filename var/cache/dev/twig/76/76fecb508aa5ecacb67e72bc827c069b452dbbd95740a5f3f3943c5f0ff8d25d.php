<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_49c9c8ceb00d5cddaddb9ee4fe17a2c32da6f69838653b74fc77dd1a31896e3d extends Twig_Template
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
        $__internal_687aeeee5905cd58a2aee0e09fe416ba8c4bd0b5f5e073e5055f4c8865bf92df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687aeeee5905cd58a2aee0e09fe416ba8c4bd0b5f5e073e5055f4c8865bf92df->enter($__internal_687aeeee5905cd58a2aee0e09fe416ba8c4bd0b5f5e073e5055f4c8865bf92df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9d1923f0b89da77ade9d8500f0b7400ff218ca481d57352b017770c6f7a2a51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1923f0b89da77ade9d8500f0b7400ff218ca481d57352b017770c6f7a2a51d->enter($__internal_9d1923f0b89da77ade9d8500f0b7400ff218ca481d57352b017770c6f7a2a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_687aeeee5905cd58a2aee0e09fe416ba8c4bd0b5f5e073e5055f4c8865bf92df->leave($__internal_687aeeee5905cd58a2aee0e09fe416ba8c4bd0b5f5e073e5055f4c8865bf92df_prof);

        
        $__internal_9d1923f0b89da77ade9d8500f0b7400ff218ca481d57352b017770c6f7a2a51d->leave($__internal_9d1923f0b89da77ade9d8500f0b7400ff218ca481d57352b017770c6f7a2a51d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
