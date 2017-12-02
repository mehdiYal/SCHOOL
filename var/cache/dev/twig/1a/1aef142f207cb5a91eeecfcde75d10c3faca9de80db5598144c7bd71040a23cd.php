<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9f579a794f7c9498e8b150b6fec5db9fd656599e809278d9031a4f35d2670800 extends Twig_Template
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
        $__internal_dd311e31bb5db11786f1e683e88fdfa057121586ec2a83bfe4eb988f08a6eb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd311e31bb5db11786f1e683e88fdfa057121586ec2a83bfe4eb988f08a6eb7e->enter($__internal_dd311e31bb5db11786f1e683e88fdfa057121586ec2a83bfe4eb988f08a6eb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a9faec3e2a9c78c51ea9ee691995c89383a09c1cc6a94db4c5749c3baa775972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9faec3e2a9c78c51ea9ee691995c89383a09c1cc6a94db4c5749c3baa775972->enter($__internal_a9faec3e2a9c78c51ea9ee691995c89383a09c1cc6a94db4c5749c3baa775972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dd311e31bb5db11786f1e683e88fdfa057121586ec2a83bfe4eb988f08a6eb7e->leave($__internal_dd311e31bb5db11786f1e683e88fdfa057121586ec2a83bfe4eb988f08a6eb7e_prof);

        
        $__internal_a9faec3e2a9c78c51ea9ee691995c89383a09c1cc6a94db4c5749c3baa775972->leave($__internal_a9faec3e2a9c78c51ea9ee691995c89383a09c1cc6a94db4c5749c3baa775972_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
