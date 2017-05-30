<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_be66fca91ed5402aaadeaaddb1f1c77abad1577da59805461b67e0e66d9af34a extends Twig_Template
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
        $__internal_5d36bb6dd657b7de0e68808d45fd0ab024197d2f2a077f91a006b8633a0c2bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d36bb6dd657b7de0e68808d45fd0ab024197d2f2a077f91a006b8633a0c2bbd->enter($__internal_5d36bb6dd657b7de0e68808d45fd0ab024197d2f2a077f91a006b8633a0c2bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5d36bb6dd657b7de0e68808d45fd0ab024197d2f2a077f91a006b8633a0c2bbd->leave($__internal_5d36bb6dd657b7de0e68808d45fd0ab024197d2f2a077f91a006b8633a0c2bbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
