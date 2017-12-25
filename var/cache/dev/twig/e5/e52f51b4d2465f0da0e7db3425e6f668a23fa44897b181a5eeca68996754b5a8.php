<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57dc079c772d6f3aaf4b9ad487ebbe39ce04f933659afe7f2a4483b41fea95de extends Twig_Template
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
        $__internal_8c9725a70edd547ce77431599736377360fb5bef1d1e2ac43b9918659989752c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9725a70edd547ce77431599736377360fb5bef1d1e2ac43b9918659989752c->enter($__internal_8c9725a70edd547ce77431599736377360fb5bef1d1e2ac43b9918659989752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b70ece6883da1e3283b0e9f35dd96fe5bc5a9fb2e7a6a96cd20747862dfb79d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70ece6883da1e3283b0e9f35dd96fe5bc5a9fb2e7a6a96cd20747862dfb79d9->enter($__internal_b70ece6883da1e3283b0e9f35dd96fe5bc5a9fb2e7a6a96cd20747862dfb79d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8c9725a70edd547ce77431599736377360fb5bef1d1e2ac43b9918659989752c->leave($__internal_8c9725a70edd547ce77431599736377360fb5bef1d1e2ac43b9918659989752c_prof);

        
        $__internal_b70ece6883da1e3283b0e9f35dd96fe5bc5a9fb2e7a6a96cd20747862dfb79d9->leave($__internal_b70ece6883da1e3283b0e9f35dd96fe5bc5a9fb2e7a6a96cd20747862dfb79d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
