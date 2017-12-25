<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cd28843b69dbbb0aaabe04968cc8d686d2662d049c99b94cf79f36ae585d202f extends Twig_Template
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
        $__internal_ca75395cbc4cfded0f687eebeb01b12b289acafdd8997d37fb67e9d968d94907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca75395cbc4cfded0f687eebeb01b12b289acafdd8997d37fb67e9d968d94907->enter($__internal_ca75395cbc4cfded0f687eebeb01b12b289acafdd8997d37fb67e9d968d94907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6bfc74969262a12e50e19987e0a95647f5e47ff41086d166e9092fc2eb3cd6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfc74969262a12e50e19987e0a95647f5e47ff41086d166e9092fc2eb3cd6b4->enter($__internal_6bfc74969262a12e50e19987e0a95647f5e47ff41086d166e9092fc2eb3cd6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca75395cbc4cfded0f687eebeb01b12b289acafdd8997d37fb67e9d968d94907->leave($__internal_ca75395cbc4cfded0f687eebeb01b12b289acafdd8997d37fb67e9d968d94907_prof);

        
        $__internal_6bfc74969262a12e50e19987e0a95647f5e47ff41086d166e9092fc2eb3cd6b4->leave($__internal_6bfc74969262a12e50e19987e0a95647f5e47ff41086d166e9092fc2eb3cd6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
