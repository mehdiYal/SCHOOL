<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_81deb9dd00e7bd7f1d91712b64be3db455d1d4268c2ee75cebdf08ef395c73c2 extends Twig_Template
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
        $__internal_318d72b373c28c75987a3e36fd08f51e0416b6adcc1641e22874c7f2d6a56fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318d72b373c28c75987a3e36fd08f51e0416b6adcc1641e22874c7f2d6a56fe5->enter($__internal_318d72b373c28c75987a3e36fd08f51e0416b6adcc1641e22874c7f2d6a56fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_11188c4e2673061e97ed5ad5f96eccbe912feb55cc6b6240d90c648175ea0aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11188c4e2673061e97ed5ad5f96eccbe912feb55cc6b6240d90c648175ea0aec->enter($__internal_11188c4e2673061e97ed5ad5f96eccbe912feb55cc6b6240d90c648175ea0aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_318d72b373c28c75987a3e36fd08f51e0416b6adcc1641e22874c7f2d6a56fe5->leave($__internal_318d72b373c28c75987a3e36fd08f51e0416b6adcc1641e22874c7f2d6a56fe5_prof);

        
        $__internal_11188c4e2673061e97ed5ad5f96eccbe912feb55cc6b6240d90c648175ea0aec->leave($__internal_11188c4e2673061e97ed5ad5f96eccbe912feb55cc6b6240d90c648175ea0aec_prof);

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
