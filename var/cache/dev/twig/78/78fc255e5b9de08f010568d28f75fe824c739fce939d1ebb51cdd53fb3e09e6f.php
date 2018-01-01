<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_51f26584e6cff714cce937f354955caee6aa29713a2515c4037dc103a41035cb extends Twig_Template
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
        $__internal_e9ecc95cefa54d79c8669c9fda036b24b8780fa9d0eb53e399b567d388506f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ecc95cefa54d79c8669c9fda036b24b8780fa9d0eb53e399b567d388506f97->enter($__internal_e9ecc95cefa54d79c8669c9fda036b24b8780fa9d0eb53e399b567d388506f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f556fe688e7246d26ff3fad08a806bf7d4b8448305bf540fdc48264c1a161451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f556fe688e7246d26ff3fad08a806bf7d4b8448305bf540fdc48264c1a161451->enter($__internal_f556fe688e7246d26ff3fad08a806bf7d4b8448305bf540fdc48264c1a161451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e9ecc95cefa54d79c8669c9fda036b24b8780fa9d0eb53e399b567d388506f97->leave($__internal_e9ecc95cefa54d79c8669c9fda036b24b8780fa9d0eb53e399b567d388506f97_prof);

        
        $__internal_f556fe688e7246d26ff3fad08a806bf7d4b8448305bf540fdc48264c1a161451->leave($__internal_f556fe688e7246d26ff3fad08a806bf7d4b8448305bf540fdc48264c1a161451_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
