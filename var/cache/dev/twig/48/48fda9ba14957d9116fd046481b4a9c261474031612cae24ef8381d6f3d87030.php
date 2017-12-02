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
        $__internal_c431ed2839cfe2906bd4dc66c4ba125724ab96755fd9281596b8ce727babfc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c431ed2839cfe2906bd4dc66c4ba125724ab96755fd9281596b8ce727babfc7a->enter($__internal_c431ed2839cfe2906bd4dc66c4ba125724ab96755fd9281596b8ce727babfc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d976a5d19ee38d547066bd0ea316a0bdea4f85bf16a91e1477e83a49cbc48489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d976a5d19ee38d547066bd0ea316a0bdea4f85bf16a91e1477e83a49cbc48489->enter($__internal_d976a5d19ee38d547066bd0ea316a0bdea4f85bf16a91e1477e83a49cbc48489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c431ed2839cfe2906bd4dc66c4ba125724ab96755fd9281596b8ce727babfc7a->leave($__internal_c431ed2839cfe2906bd4dc66c4ba125724ab96755fd9281596b8ce727babfc7a_prof);

        
        $__internal_d976a5d19ee38d547066bd0ea316a0bdea4f85bf16a91e1477e83a49cbc48489->leave($__internal_d976a5d19ee38d547066bd0ea316a0bdea4f85bf16a91e1477e83a49cbc48489_prof);

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
