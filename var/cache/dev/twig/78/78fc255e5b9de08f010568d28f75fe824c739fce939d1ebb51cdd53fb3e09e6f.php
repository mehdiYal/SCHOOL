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
        $__internal_edc1778aef3c4312b06f4968a30cb81c4080fb8bf9bfd265c29f0b25f1d51a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc1778aef3c4312b06f4968a30cb81c4080fb8bf9bfd265c29f0b25f1d51a01->enter($__internal_edc1778aef3c4312b06f4968a30cb81c4080fb8bf9bfd265c29f0b25f1d51a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_27b0f86b126e58ecf570692783eded862d6548ef0df4b1d0a66b290556a2301c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b0f86b126e58ecf570692783eded862d6548ef0df4b1d0a66b290556a2301c->enter($__internal_27b0f86b126e58ecf570692783eded862d6548ef0df4b1d0a66b290556a2301c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_edc1778aef3c4312b06f4968a30cb81c4080fb8bf9bfd265c29f0b25f1d51a01->leave($__internal_edc1778aef3c4312b06f4968a30cb81c4080fb8bf9bfd265c29f0b25f1d51a01_prof);

        
        $__internal_27b0f86b126e58ecf570692783eded862d6548ef0df4b1d0a66b290556a2301c->leave($__internal_27b0f86b126e58ecf570692783eded862d6548ef0df4b1d0a66b290556a2301c_prof);

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
