<?php

namespace Spirit\SkroutzOrderTracking\Ui\Component\Listing\Column;

class SkroutzOrder extends \Magento\Ui\Component\Listing\Columns\Column
{
    /**
     * @var \Magento\Framework\View\Asset\Repository
     */
    protected $_assetRepository;

    /**
     * SkroutzOrder constructor.
     * @param  \Magento\Framework\View\Element\UiComponent\ContextInterface  $context
     * @param  \Magento\Framework\View\Element\UiComponentFactory  $uiComponentFactory
     * @param  \Magento\Framework\View\Asset\Repository  $assetRepository
     * @param  array  $components
     * @param  array  $data
     */
    public function __construct(
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        \Magento\Framework\View\Asset\Repository $assetRepository,
        array $components = [],
        array $data = []
    ) {
        $this->_assetRepository = $assetRepository;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param  array  $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $column_name = $this->getData('name');
                $value = $item[$column_name];
                if ($value) {
                    $url = $this->_assetRepository->getUrl('Spirit_SkroutzOrderTracking::images/skroutz.jpg');
                    $item[$column_name.'_src'] = $url;
                }
            }
        }

        return $dataSource;
    }
}
