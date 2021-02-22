"""gradienthealth_lidc_dataset dataset."""

import tensorflow_datasets as tfds

# TODO(gradienthealth_lidc_dataset): Markdown description  that will appear on the catalog page.
_DESCRIPTION = """ 
"""

# TODO(gradienthealth_lidc_dataset): BibTeX citation
_CITATION = """
"""

train_csv_path = './train.csv'
val_csv_path = './val.csv'
test_csv_path = './test.csv'


class GradienthealthLidcDataset(tfds.core.GeneratorBasedBuilder):
  """DatasetBuilder for gradienthealth_lidc_dataset dataset."""

  VERSION = tfds.core.Version('1.0.0')
  RELEASE_NOTES = {
      '1.0.0': 'Initial release.',
  }

  def _info(self) -> tfds.core.DatasetInfo:
    """Returns the dataset metadata."""
    # TODO(gradienthealth_lidc_dataset): Specifies the tfds.core.DatasetInfo object
    return tfds.core.DatasetInfo(
        builder=self,
        description=_DESCRIPTION,
        features=tfds.features.FeaturesDict({
            # These are the features of your dataset like images, labels ...
            'image': tfds.features.Image(shape=(None, None, 3)),
            'label': tfds.features.ClassLabel(names=['no', 'yes']),
        }),
        # If there's a common (input, target) tuple from the
        # features, specify them here. They'll be used if
        # `as_supervised=True` in `builder.as_dataset`.
        supervised_keys=('image', 'label'),  # Set to `None` to disable
        homepage='https://dataset-homepage/',
        citation=_CITATION,
         
    )

  def _split_generators(self, dl_manager: tfds.download.DownloadManager):
    """Returns SplitGenerators.""" 
    train_df = pd.read_csv(train_csv_path, lineterminator='\n')
    val_df = pd.read_csv(val_csv_path, lineterminator='\n')
    test_df = pd.read_csv(test_csv_path, lineterminator='\n')

    # TODO(gradienthealth_lidc_dataset): Downloads the data and defines the splits
    path = dl_manager.download_and_extract('https://todo-data-url')

    # TODO(gradienthealth_lidc_dataset): Returns the Dict[split names, Iterator[Key, Example]]
    # return {
    #     'train': self._generate_examples(path / 'train_imgs'),
    # }

    return [
      tfds.core.SplitGenerator(
          name=tfds.Split.TRAIN,
          gen_kwargs={
            'df':train_df,
          },
      ),
      tfds.core.SplitGenerator(
          name=tfds.Split.VALIDATION,
          gen_kwargs={
            'df':val_df,
          },
      ),
      tfds.core.SplitGenerator(
          name=tfds.Split.TEST,
          gen_kwargs={
            'df':test_df,
          },
      ),
    ]

  def _generate_examples(self, path):
    """Yields examples."""
    # TODO(gradienthealth_lidc_dataset): Yields (key, example) tuples from the dataset
    savefor f in path.glob('*.jpeg'):
      yield 'key', {
          'image': f,
          'label': 'yes',
      }
