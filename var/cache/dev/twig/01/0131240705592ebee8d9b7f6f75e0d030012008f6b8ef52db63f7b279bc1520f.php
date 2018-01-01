<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ce17a06d123786834a6ea50c315248a49c186b02a71ae7129cd552441505c24e extends Twig_Template
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
        $__internal_557d8206ffc1792ec8871841ae0828b06daab0978f2788d7165e1db66e1f8e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557d8206ffc1792ec8871841ae0828b06daab0978f2788d7165e1db66e1f8e1a->enter($__internal_557d8206ffc1792ec8871841ae0828b06daab0978f2788d7165e1db66e1f8e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d266c9dd74023a8e2b9271cb63776825902d6381727265ea81dde5b0284083d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d266c9dd74023a8e2b9271cb63776825902d6381727265ea81dde5b0284083d2->enter($__internal_d266c9dd74023a8e2b9271cb63776825902d6381727265ea81dde5b0284083d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_557d8206ffc1792ec8871841ae0828b06daab0978f2788d7165e1db66e1f8e1a->leave($__internal_557d8206ffc1792ec8871841ae0828b06daab0978f2788d7165e1db66e1f8e1a_prof);

        
        $__internal_d266c9dd74023a8e2b9271cb63776825902d6381727265ea81dde5b0284083d2->leave($__internal_d266c9dd74023a8e2b9271cb63776825902d6381727265ea81dde5b0284083d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
