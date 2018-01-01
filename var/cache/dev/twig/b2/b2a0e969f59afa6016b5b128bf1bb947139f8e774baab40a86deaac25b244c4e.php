<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_168e27de5da6aa30ab9f02bb44200dae4d985d96e9baa1ef6c78504bb332b72a extends Twig_Template
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
        $__internal_6fec49924d72e258978ba11e2c552d140350d6a8180bdd77527e56fdef88c0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fec49924d72e258978ba11e2c552d140350d6a8180bdd77527e56fdef88c0aa->enter($__internal_6fec49924d72e258978ba11e2c552d140350d6a8180bdd77527e56fdef88c0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9f7e2a1b36300c62e881b2b5dd1e5fb0c8ef530b3cc9f82e4034ba6440a19ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7e2a1b36300c62e881b2b5dd1e5fb0c8ef530b3cc9f82e4034ba6440a19ce8->enter($__internal_9f7e2a1b36300c62e881b2b5dd1e5fb0c8ef530b3cc9f82e4034ba6440a19ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6fec49924d72e258978ba11e2c552d140350d6a8180bdd77527e56fdef88c0aa->leave($__internal_6fec49924d72e258978ba11e2c552d140350d6a8180bdd77527e56fdef88c0aa_prof);

        
        $__internal_9f7e2a1b36300c62e881b2b5dd1e5fb0c8ef530b3cc9f82e4034ba6440a19ce8->leave($__internal_9f7e2a1b36300c62e881b2b5dd1e5fb0c8ef530b3cc9f82e4034ba6440a19ce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
