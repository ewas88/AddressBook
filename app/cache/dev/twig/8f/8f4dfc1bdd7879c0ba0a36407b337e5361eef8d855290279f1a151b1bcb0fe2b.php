<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6c91bf0567c27ac45efd417ab8014b8528d326f550c35e9c7a905d6801b609a6 extends Twig_Template
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
        $__internal_3dd1673f1b7a6c645b2b25c6808a43d8518cae1d96eeab2d1dc42c3ad7256a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd1673f1b7a6c645b2b25c6808a43d8518cae1d96eeab2d1dc42c3ad7256a82->enter($__internal_3dd1673f1b7a6c645b2b25c6808a43d8518cae1d96eeab2d1dc42c3ad7256a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3dd1673f1b7a6c645b2b25c6808a43d8518cae1d96eeab2d1dc42c3ad7256a82->leave($__internal_3dd1673f1b7a6c645b2b25c6808a43d8518cae1d96eeab2d1dc42c3ad7256a82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
", "@Framework/Form/form_errors.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
