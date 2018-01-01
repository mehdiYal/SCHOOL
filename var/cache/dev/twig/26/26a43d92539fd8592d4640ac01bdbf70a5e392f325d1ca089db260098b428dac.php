<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3c9eefb9c74e89746badba9aa2fb0c7212b6d86b17ef6813f006b3cb07ed6cae extends Twig_Template
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
        $__internal_d57e02f935318414b84046877e1c431ffb6727e42ea0fd6abbdc05cd3e837fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d57e02f935318414b84046877e1c431ffb6727e42ea0fd6abbdc05cd3e837fab->enter($__internal_d57e02f935318414b84046877e1c431ffb6727e42ea0fd6abbdc05cd3e837fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cc508d6c99afb07a1ad6e97ca62c4397967ea33a22681995a376b9d3cb2e6495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc508d6c99afb07a1ad6e97ca62c4397967ea33a22681995a376b9d3cb2e6495->enter($__internal_cc508d6c99afb07a1ad6e97ca62c4397967ea33a22681995a376b9d3cb2e6495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d57e02f935318414b84046877e1c431ffb6727e42ea0fd6abbdc05cd3e837fab->leave($__internal_d57e02f935318414b84046877e1c431ffb6727e42ea0fd6abbdc05cd3e837fab_prof);

        
        $__internal_cc508d6c99afb07a1ad6e97ca62c4397967ea33a22681995a376b9d3cb2e6495->leave($__internal_cc508d6c99afb07a1ad6e97ca62c4397967ea33a22681995a376b9d3cb2e6495_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
