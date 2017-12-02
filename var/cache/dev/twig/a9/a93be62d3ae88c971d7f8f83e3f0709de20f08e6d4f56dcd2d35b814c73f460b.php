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
        $__internal_e3f0129c16ced73a5f3630ecd8d5f6e1a6e0a98fd267fa4d6faa38387bf342e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f0129c16ced73a5f3630ecd8d5f6e1a6e0a98fd267fa4d6faa38387bf342e9->enter($__internal_e3f0129c16ced73a5f3630ecd8d5f6e1a6e0a98fd267fa4d6faa38387bf342e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bc55f494d43f4a9886ab763a783f600efdecc6de42a8592744eb4f60e52ee1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc55f494d43f4a9886ab763a783f600efdecc6de42a8592744eb4f60e52ee1a6->enter($__internal_bc55f494d43f4a9886ab763a783f600efdecc6de42a8592744eb4f60e52ee1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e3f0129c16ced73a5f3630ecd8d5f6e1a6e0a98fd267fa4d6faa38387bf342e9->leave($__internal_e3f0129c16ced73a5f3630ecd8d5f6e1a6e0a98fd267fa4d6faa38387bf342e9_prof);

        
        $__internal_bc55f494d43f4a9886ab763a783f600efdecc6de42a8592744eb4f60e52ee1a6->leave($__internal_bc55f494d43f4a9886ab763a783f600efdecc6de42a8592744eb4f60e52ee1a6_prof);

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
